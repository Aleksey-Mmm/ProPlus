<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
/* @var $sotr app\entities\Sotrudnik */

$this->title = 'Страница разработки морд - 5';

?>
<div class="front-page5">
<?= $sotr->getFam(); ?>
<?= Yii::$app->user->isGuest ? "ggggg" : Yii::$app->user->identity->username?>
</div>
