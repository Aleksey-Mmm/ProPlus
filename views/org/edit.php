<?php
/* @var $this yii\web\View */
/* @var $org app\models\Org */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Редактор';

?>
<div class="jumbotron">
    <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
    <!-- Панель редактор предприятия -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto" >
                    <b>Организация</b>
                </div>

                <div class="btn-group">

                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                            Сохранить <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><?= Html::submitButton('Сохранить', ['class' => 'btn btn-sm btn-default', 'name'=>'sss']) ?></li>
                            <li class="divider"></li>
                            <li><?= Html::submitButton('Сохранить и выбрать', ['class' => 'btn btn-sm btn-default', 'name'=>'123']) ?></li>

                        </ul>
                    </div>
                    <a href="<?= Url::to(['org/']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></a>
                    <a href="<?= Url::to(['org/']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
                </div>
            </div>
        </div>

        <div class="panel-body lt">

                <div class="form-group">
                    <label>Краткое наименование организации (для форм)</label>
                    <?= $form->field($org, 'short_name')
                        ->textInput(['class'=>'form-control'])
                        ->label(false);
                    //<input class="form-control" type="text" placeholder="Краткое наименование">
                    ?>

                </div>

                <div class="form-group">
                    <label>Полное наименование организации (для печати)</label>
                    <input class="form-control" type="text" placeholder="Полное наименование">
                </div>

                <div class="form-group">
                    <label>ОГРН</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="ОГРН">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>ИНН</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="ИНН">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>КПП</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="КПП">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>ОКПО</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="ОКПО">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>ОКВЭД</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="ОКВЭД">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Юридический адрес</label>
                    <input class="form-control" type="text" placeholder="Юридический адрес">
                </div>

                <div class="form-group">
                    <label>Почтовый адрес</label>
                    <input class="form-control" type="text" placeholder="Почтовый адрес">
                </div>

        </div>
    </div>
    <!-- /Панель редактор -->

    <!-- Панель редактор Банк -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto" >
                    <b>Банковские реквизиты</b>
                </div>
            </div>
        </div>

        <div class="panel-body lt">

                <div class="form-group">
                    <label>Наименование банка</label>
                    <input class="form-control" type="text" placeholder="Наименование банка">
                </div>

                <div class="form-group">
                    <label>БИК</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="БИК">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Расчетный счет</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="Расчетный счет">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Корреспондентский счет</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" placeholder="Корреспондентский счет">
                        </div>
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- /Панель редактор -->
    <?php
    $form::end();
    ?>
</div>
