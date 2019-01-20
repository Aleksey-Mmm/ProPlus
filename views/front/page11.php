<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Информация для клиента';

?>
<div class="jumbotron">
<!-- Панель редактор к. информации -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
        </div> 
  
        <div class="btn-group">
           
            <a href="<?= Url::to(['front/page2']); ?>" class="btn btn-sm btn-default">Сохранить</a>
            <a href="<?= Url::to(['front/page2']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 
<div class="panel-body">

Тут редактор как на Папос

                        
</div>   
</div>
<!-- /Панель редактор к. информации --> 
</div>
