<?php

/* @var $this yii\web\View */

/* @var $fizlico app\models\FizLico */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Редактор';

?>
<div class="jumbotron">
    <!-- Панель редактор к. лицо -->
    <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto">
                    <b>Редактор</b>
                </div>

                <div class="btn-group">

                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                            Сохранить <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><?= Html::submitButton('Сохранить', ['class' => 'btn btn-sm btn-default', 'name' => 'save']) ?></li>
                            <li class="divider"></li>
                            <li><?= Html::submitButton('Сохранить и выбрать', ['class' => 'btn btn-sm btn-default', 'name' => 'select']) ?></li>
                        </ul>
                    </div>
                    <a href="<?= Url::to(['fizlico/']); ?>" class="btn btn-sm btn-default"><span
                                class="glyphicon glyphicon-saved"></span></a>
                    <a href="<?= Url::current(['fizlico/']); ?>" class="btn btn-sm btn-default"><span
                                class="glyphicon glyphicon-unchecked"></span></a>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <div class="flex_center">
                <div class="wb50">

                    <?= $form->field($fizlico, 'fam', [
                        'template' => '<div class="input-group" title="Фамилия">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => 'Фамилия'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'name', [
                        'template' => '<div class="input-group" title="Имя">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => 'Имя'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'otch', [
                        'template' => '<div class="input-group" title="Отчество">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => 'Отчество'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'telephone', [
                        'template' => '<div class="input-group" title="Телефлон">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => 'Телефлон'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'email', [
                        'template' => '<div class="input-group" title="e-mail">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => 'e-mail'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'birthday', [
                        'template' => '<div class="input-group" title="День рождения">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-gift"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textInput(['class' => 'form-control', 'placeholder' => '', 'type' => 'date'])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'sex', [
                        'template' => '<div class="input-group" title="Пол">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-tree-deciduous"></span></span>{input}{error}
                            </div>'
                    ])
                        ->dropDownList([
                            '1' => 'Мужской',
                            '2' => 'Женский',
                        ],
                            [
                                'prompt'=>'Пол',
                            ])
                        ->label(false);
                    ?>
                    <br>
                    <?= $form->field($fizlico, 'dop_info', [
                        'template' => '<div class="input-group" title="Дополнительная информация">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>{input}{error}
                            </div>'
                    ])
                        ->textarea(['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Дополнительная информация'])
                        ->label(false);
                    ?>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <?php $form::end(); ?>
    <!-- /Панель редактор к. лицо -->
</div>