<?php
/**
 * справочники
 * User: malkov alexey
 * Date: 08.02.2019
 * Time: 13:04
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Справочники';

?>
<div class="jumbotron">
    <!-- Панель Выбора -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto" >
                    <b>Кабинет</b>
                </div>

                <div class="btn-group">
                    <a href="<?= Url::to(['./']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
                </div>

            </div>

        </div>

        <div class="panel-body">
            <div class="list-group">
                <div class="list-group-item active">
                    Справочники
                </div>
                <a href="<?= Url::to(['org/']); ?>" class="list-group-item lt">Организации</a>
                <a href="<?= Url::to(['front/page7']); ?>" class="list-group-item lt">Частные лица</a>
                <a href="#" class="list-group-item lt">Сотрудники</a>
                <a href="<?= Url::to(['front/page14']); ?>" class="list-group-item lt">Услуги</a>
                <a href="<?= Url::to(['front/page15']); ?>" class="list-group-item lt">Оборудование</a>
                <a href="#" class="list-group-item lt">Склад</a>
                <a href="#" class="list-group-item lt">Выполненная работа</a>
                <a href="#" class="list-group-item lt">*</a>


            </div>


            <!-- /Панель Выбора -->
        </div>
