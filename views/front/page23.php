<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Страница разработки морд - 4';

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
        <a href="<?= Url::to(['front/page6']); ?>" class="list-group-item lt">Организации</a>
        <a href="<?= Url::to(['front/page7']); ?>" class="list-group-item lt">Частные лица</a>

        <a href="<?= Url::to(['front/page14']); ?>" class="list-group-item lt">Услуги</a>
        <a href="<?= Url::to(['front/page15']); ?>" class="list-group-item lt">Оборудование</a>
        <a href="#" class="list-group-item lt">Склад</a>
        <a href="#" class="list-group-item lt">Выполненная работа</a>
        <a href="#" class="list-group-item lt">*</a>


    </div>


<!-- /Панель Выбора -->
</div>
