<?php

namespace app\models;

//use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

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
class Sotrudnik extends ActiveRecord
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sotrudnik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
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

}
