<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sotrudnik\SignupForm */
/* @var $form ActiveForm */
?>
<div class="site-signup">
<div class="col-lg-5">
    <?php $form = ActiveForm::begin([
        'id' => 'signup-form',
    ]); ?>

    <?= $form->field($model, 'fam')->textInput(); ?>
    <?= $form->field($model, 'name')->textInput(); ?>
    <?= $form->field($model, 'otch')->textInput(); ?>
    <?= $form->field($model, 'email')->textInput(); ?>
    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
       // 'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Создать', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div><!-- site-signup -->
