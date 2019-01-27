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
<!-- Панель редактор -->
<div class="panel panel-default">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
  </div>
</div>
 
<div class="panel-body">
    <div class="flex_center"> 
        <div class="wt70">

    <select class="form-control">
        <option value="">Список каталога</option>
        <option value="">Русский</option>
        <option value="">Английский</option>
        <option value="">Французский</option>
    </select>  
    <br>

    <input class="form-control" type="text" placeholder="Наименование">
    <br> 

                
        </div>                        
    </div>                          
</div>   
</div>
<!-- /Панель редактор --> 
</div>
