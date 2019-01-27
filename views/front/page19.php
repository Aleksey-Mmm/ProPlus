<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Редактор';

?>
<div class="jumbotron">
<!-- Панель редактор Банк -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Расчетный счет</b> 
        </div> 
  
        <div class="btn-group">
           
            <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default">Сохранить</a>
            <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 
<div class="panel-body lt">

                        
<form>
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

</form>

    
                         
</div>   
</div>
<!-- /Панель редактор -->

   
</div>
