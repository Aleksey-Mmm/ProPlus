<?php
/**
 * шаблон письма подтверждения емайл
 * User: Alex
 * Date: 24.12.2018
 * Time: 22:30
 */

/* @var $this yii\web\View  */
/* @var $sotrudnik app\models\sotrudnik\Sotrudnik */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl([
    '/site/email-confirm', 'token' => $sotrudnik->email_confirm_token
]);

//TODO:: дописать шаблон