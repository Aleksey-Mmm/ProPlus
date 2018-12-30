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
?>

Здравствуйте <?= $sotrudnik->name. ' '. $sotrudnik->otch; ?>.
Для подтверждения этого почтового адреса пройдите по ссылке: <br>
<?= \yii\helpers\Html::a('Подтвердить.', $confirmLink); ?><br>
Если Вы не регистрировались на нашем сайте, то самое время зарегистрироваться сейчас! А это письмо просто удалите..