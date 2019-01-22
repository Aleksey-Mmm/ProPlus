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
    public $verCode;
    public $status;
    public $predpr_id;

    public function rules()
    {
        return Sotrudnik::sotrudnikRules();
    }

    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'fam' => 'Фамилия',
          'otch' => 'Отчество',
          'verCode' => 'Капча',
        ];
    }

    /**
     * проверка введенного, создание сотрудника,
     * сохранение сотрудника в бд, отправка запроса подтверждения емайл
     *
     * @param int $group //к какой группе относится создаваемый сотрудник
     * @param int $predpr_id //сотрудник какого предприятия. при создании админа = 0 (нет еще предприятия)
     * @return Sotrudnik|null
     * @throws \yii\base\Exception
     */
    public function signUp($group = Sotrudnik::GROUP_ENGINEER, $predpr_id = 0)
    {

        if ($this->validate()) {
            $sotrudnik = new Sotrudnik();
            $sotrudnik->predpr_id = $predpr_id;
            $sotrudnik->name = $this->name;
            $sotrudnik->fam = $this->fam;
            $sotrudnik->otch = $this->otch;
            $sotrudnik->email = $this->email;
            $sotrudnik->group = $group;
            $sotrudnik->status = Sotrudnik::STATUS_WAIT;
            $tempPassword = \Yii::$app->security->generateRandomString(6);
            $sotrudnik->setPassword($tempPassword);
            $sotrudnik->generateAuthKey();
            $sotrudnik->generateEmailConfirmToken();

            if ($sotrudnik->save()) {
                \Yii::$app->mailer->compose('confirmEmail', compact('sotrudnik', 'tempPassword'))
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
                    ->setTo($sotrudnik->email)
                    ->setSubject('Подтверждение регистрации для '. $sotrudnik->name. ' '. $sotrudnik->otch)
                    ->send();
                //var_dump($sotrudnik);
                return ($sotrudnik);
            }
        }
        //var_dump( $this->getErrors());
        return null;
    }


}