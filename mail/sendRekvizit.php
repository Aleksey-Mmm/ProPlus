<?php
/**
 * шаблон письма подтверждения емайл
 * User: Alex
 * Date: 24.12.2018
 * Time: 22:30
 */

/* @var $this yii\web\View  */
/* @var $sotrudnik app\models\sotrudnik\Sotrudnik */
/* @var $tempPassword string */

$loginLink = Yii::$app->urlManager->createAbsoluteUrl([
    '/site/login',
]);
?>

Здравствуйте <?= $sotrudnik->name. ' '. $sotrudnik->otch; ?>.
Ваш емайл был подтвержден. Исподьзуйте его для входа на сайт.<br>
Ваш пароль: <?= $tempPassword ?><br>
Рекомендуем поменять его при первой же возможности.<br>
Для входа можете воспользоваться следующей ссылкой:<br>
<?= \yii\helpers\Html::a('Войти.', $loginLink); ?><br>
Рады, что Вы с нами!