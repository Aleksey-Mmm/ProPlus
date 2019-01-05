<?php
/**
 * Модель подтверждения емайла сотрудника
 * User: Alex
 * Date: 30.12.2018
 * Time: 20:20
 */

namespace app\models\sotrudnik;


use yii\base\InvalidParamException;
use yii\base\Model;

class EmailConfirmForm extends Model
{
    private $_sotrudnik;

    /**
     * EmailConfirmForm constructor.
     * @param $token
     * @param array $config
     * @throws \InvalidArgumentException
     */
    public function __construct($token, $config=[])
    {
        if (empty($token) || !is_string($token)) {
            throw new \InvalidArgumentException("Отсутствует код подтверждения.");
        }
        $this->_sotrudnik = Sotrudnik::findByEmailConfirmToken($token);
        if (!$this->_sotrudnik) {
            throw new \InvalidArgumentException("Не верный код подтверждения.");
        }
        parent::__construct($config);
    }

    /**
     * @return Sotrudnik|null
     * @throws \yii\base\Exception
     */
    public function confirmEmail()
    {
        $sotrudnik = $this->_sotrudnik;
        $sotrudnik->status = Sotrudnik::STATUS_ACTIVE;
        $sotrudnik->removeEmailConfirmToken();
        $tempPassword = \Yii::$app->security->generateRandomString(6);
        $sotrudnik->setPassword($tempPassword);

        if ($sotrudnik->save()) {
            \Yii::$app->mailer->compose('sendRekvizit', compact('sotrudnik', 'tempPassword'))
                ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
                ->setTo($sotrudnik->email)
                ->setSubject('Реквизиты для входа в '. \Yii::$app->name)
                ->send();
            //var_dump($sotrudnik);
            return ($sotrudnik);
        }
        return null;
    }

}