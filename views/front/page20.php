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
           
            <a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal">Сохранить</a>
            <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 


<div class="panel-body">
    <div class="flex_center"> 
        <div class="wb60 lt">

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
<!-- Модальгное окно 1 -->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert alert-danger ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Внимание!</h4>
                </div>
                <div class="modal-body">

Все изменения учетной записи будут сохранены.  
                   Продолжить?
                    
                    
                </div>
                <div class="modal-footer">
                    <a href="<?= Url::to(['front/page17']); ?>" class="btn btn-sm btn-default">Сохранить</a>
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
                </div>
            </div>
        </div>
    </div>
<!-- /Модальгное окно 1 -->

</div>
