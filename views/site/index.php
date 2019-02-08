<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Сервис';
?>


<div class="jumbotron">
    <div class="row">
        <a href="<?= Url::to(['front/page4']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-list-alt gi-4x"> </i> <br> Журнал услуг 
        </div> 
        </a>
        
        <div class="col-xs-1">
        </div> 
        <a href="<?= Url::to(['front/page1']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-file gi-4x"> </i> <br> Новый бланк 
        </div>
        </a> 
    </div>
    
    <div class="row">
        <a href="<?= Url::to(['/nastrbl']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-th-list gi-4x"> </i> <br> Конструктор бланков 
        </div>
        </a> 
        
        <div class="col-xs-1">
        </div> 
        <a href="<?= Url::to(['front/page21']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-user gi-4x"> </i> <br> Сотрудники 
        </div>
        </a> 
    </div>
        <div class="row">
        <a href="<?= Url::to(['front/page17']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-home gi-4x"> </i> <br> Кабинет 
        </div>
        </a> 
        
        <div class="col-xs-1">
        </div> 
        <a href="<?= Url::to(['site/sprav']); ?>">
        <div class="alert alert-success cur shadow col-xs-5">
            <i class="glyphicon glyphicon-list gi-4x"> </i> <br> Справочники 
        </div>
        </a> 
    </div>

    <div class="row">
        <a href="<?= Url::to(['front/page10']); ?>">
            Конструктор бланков (разработка)
        </a>
    </div>

</div>