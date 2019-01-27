<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Учетная запись';

?>
<div class="jumbotron">
<!-- Панель редактор Банк -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Учетная запись</b> 
        </div> 
  
        <div class="btn-group">
           
            <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default">Сохранить</a>
            <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 


<div class="panel-body">
    <div class="flex_center"> 
        <div class="wt60 lt">

    <div class="form-group">
        <label>Логин:</label>
        <h3>SA0017/10/271347</h3>
    </div>

    <div class="form-group">
        <label>e-mail:</label>
        <input class="form-control" type="text" placeholder="e-mail">
    </div>


    <div class="form-group">
        <label>Введите новый пароль:</label>
        <div class="input-group">
            <input type="password" placeholder="Пароль" class="form-control">
            <div class="input-group-addon"><span class="glyphicon glyphicon-eye-open" title="Показать пароль"></span></div>
        </div>
    </div>


    <div class="form-group">
        <label>Повторить пароль</label>
        
        <div class="input-group">
            <input type="password" placeholder="Повторить пароль" class="form-control">
            <div class="input-group-addon"><span class="glyphicon glyphicon-eye-open" title="Показать пароль"></span></div>
        </div>

    </div>

                
        </div>                        
    </div>                          
</div>  


   
</div>
<!-- /Панель редактор -->


</div>
