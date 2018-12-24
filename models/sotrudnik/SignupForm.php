<?php
/**
 * Форма регистрации нового сотрудника
 * User: Alex
 * Date: 23.12.2018
 * Time: 19:39
 */

namespace app\models\sotrudnik;


use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $fam;
    public $otch;
    public $email;
    public $verifyCode;

    public function rules()
    {
        return [
            [['name', 'fam', 'email', 'otch'], 'filter', 'filter' => 'trim'],
            [['name', 'fam', 'email'], 'required', 'message' => 'Нужно заполнить'],
            [['email'], 'email', 'message' => 'Ввдите корректный емайл!'],
            [['name', 'fam', 'email', 'otch'], 'string', 'max' => 255, 'message' => 'Не более 255 символов'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'fam' => 'Фамилия',
          'otch' => 'Отчество',
          'verifyCode' => 'Капча',
        ];
    }

    /**
     * проверка введенного, создание сотрудника,
     * сохранение сотрудника в бд, отправка запроса подтверждения емайл
     *
     * @return Sotrudnik|null
     * @throws \yii\base\Exception
     */
    public function signUp()
    {
        if ($this->validate()) {
            $sotrudnik = new Sotrudnik();
            $sotrudnik->name = $this->name;
            $sotrudnik->fam = $this->fam;
            $sotrudnik->otch = $this->otch;
            $sotrudnik->email = $this->email;
            $sotrudnik->group = 2;
            $sotrudnik->status = Sotrudnik::STATUS_WAIT;
            $tempPassword = \Yii::$app->security->generateRandomString(6);
            $sotrudnik->setPassword($tempPassword);
            $sotrudnik->generateAuthKey();
            $sotrudnik->generateEmailConfirmToken();

            if ($sotrudnik->save()) {
                \Yii::$app->mailer->compose('confirmEmail', ['sotrudnik' => $sotrudnik])
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
                    ->setTo($sotrudnik->email)
                    ->setSubject('Подтверждение регистрации для '. $sotrudnik->name. ' '. $sotrudnik->otch)
                    ->send();
                return $sotrudnik;
            }
        }
        return null;
    }


}