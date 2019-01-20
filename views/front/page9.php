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
                    <li><a href="<?= Url::to(['front/page7']);?>">Сохранить</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= Url::to(['front/page1']);?>">Сохранить и выбрать</a></li>
                </ul>
         </div>
            <a href="<?= Url::to(['front/page6']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></a>
            <a href="<?= Url::to(['front/page6']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 
<div class="panel-body lt">

                        
<form>
    <div class="form-group">
        <label>Краткое наименование организации (для форм)</label>
        <input class="form-control" type="text" placeholder="Краткое наименование">
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

</form>

    
                         
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



