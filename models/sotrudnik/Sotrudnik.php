<?php

namespace app\models\sotrudnik;

//use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "sotrudnik".
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 * @property string $fam
 * @property string $name
 * @property string $otch
 * @property string $auth_key
 * @property string $email_confirm_token
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $group
 */
class Sotrudnik extends ActiveRecord implements IdentityInterface
{
    const STATUS_WAIT = 1;
    const STATUS_ACTIVE = 0;
    const STATUS_BLOCKED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sotrudnik';
    }

    public static function sotrudnikRules()
    {
        return [
            ['email', 'email', 'message' => 'Ввдите корректный емайл!'],
            ['email', 'required', 'message' => 'Емайл должен быть указан!'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => self::class, 'message' => 'Такой емайл уже зарегистрирован!'],

            ['fam', 'required', 'message' => 'Фамилия должна быть указана!'],
            ['fam', 'string', 'max' => 255],
            ['fam', 'string', 'min' => 2, 'message' => 'Фамилия не менее 2 символов!'],

            ['name', 'required', 'message' => 'Имя должно быть указано!'],
            ['name', 'string', 'max' => 255],
            ['name', 'string', 'min' => 2, 'message' => 'Имя не менее 2 символов!'],

            ['otch', 'string', 'max' => 255],
            //['otch', 'string', 'min' => 2],

            ['status', 'integer'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => array_keys(self::getStatusesArray())],


            //[['created_at', 'updated_at', 'fam', 'name', 'password_hash', 'email'], 'required'],
            //[['created_at', 'updated_at', 'status', 'group'], 'integer'],
            //[['fam', 'name', 'otch', 'email_confirm_token', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            //[['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return self::sotrudnikRules();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
            'fam' => 'Фамилия',
            'name' => 'Имя',
            'otch' => 'Отчество',
            'email' => 'Email',
            'status' => 'Статус',
            'group' => 'Группа',
        ];
    }

    /**
     * возвращает название текущего статуса
     *
     * @return string
     */
    public function getStatusName()
    {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }

    /**
     * возвращает массив с названияи статусов
     *
     * @return array
     */
    public static function getStatusesArray()
    {
        return [
          self::STATUS_WAIT => 'Ожидает',
          self::STATUS_ACTIVE => 'Активен',
          self::STATUS_BLOCKED => 'Заблокирован',
        ];
    }

    /**
     * поведение. автоматом устанавливает и обновляет поля created_at, updated_at
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     *
     * @param $email string по которому ищем
     * @return null|Sotrudnik
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     *
     * @param $password string проверяемый на валидность пароль
     * @return bool true если пароль правильный
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     *
     * @param $password string хэш которого хотим получить
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password_hash = \Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * генерируем ключ атентификации для "remember me'
     *
     * @throws \yii\base\Exception
     */
    public function generateAuthKey()
    {
        $this->auth_key = \Yii::$app->security->generateRandomString();
    }

    /**
     * перед добавлением нового сотрудника генерируем ему AuthKey
     *
     * @param bool $insert
     * @return bool
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->generateAuthKey();
            }
            return true;
        }
        return false;
    }

    /**
     * для сброса пароля
     *
     * @param $token string
     * @return null|Sotrudnik
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE
        ]);

    }

    /**
     * проверяем не просрочен ли токен
     *
     * @param $token string проверяемый токен
     * @return bool
     */
    protected static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = \Yii::$app->params['sotrudnik.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + $expire >= time();
    }

    /**
     * генерирует новый токен сброса пароля
     *
     * @throws \yii\base\Exception
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = \Yii::$app->security->generateRandomString(). '_'. time();
    }

    /**
     *обнуляет токен сброса пароля
     *
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * поиск сотрудника по токену подтверждения почты
     *
     * @param $token string
     * @return null|Sotrudnik
     */
    public static function findByEmailConfirmToken($token)
    {
        return static::findOne([
            'email_confirm_token' => $token,
            'status' => self::STATUS_WAIT
        ]);
    }

    /**
     * генерирует токен подтверждения емайл
     *
     * @throws \yii\base\Exception
     */
    public function generateEmailConfirmToken()
    {
        $this->email_confirm_token = \Yii::$app->security->generateRandomString();
    }


    public function removeEmailConfirmToken()
    {
        $this->email_confirm_token = null;
    }


    //--- Identity

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {

        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     * @throws NotSupportedException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('Эта функция находится в разработке.');

    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {

        return $this->auth_key;
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {

        return $this->getAuthKey() === $authKey;
    }
}
