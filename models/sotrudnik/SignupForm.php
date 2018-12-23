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


}