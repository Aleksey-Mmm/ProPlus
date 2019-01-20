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
<!-- Панель редактор к. лицо -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
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
            <a href="<?= Url::to(['front/page7']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></a>
            <a href="<?= Url::to(['front/page7']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 
<div class="panel-body">





    <div class="flex_center"> 

        <div class="bl2">
            
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Фамилия">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Имя">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Отчество">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                        <input type="text" class="form-control" placeholder="Телефон">
                    </div> 
<br>
                   
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="text" class="form-control" placeholder="еmail">
                    </div> 
<br>

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-gift"></span></span>
                        <input class="form-control" type="date" placeholder=""  id="example-date-input">
                    </div> 
<br>

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tree-deciduous"></span></span>
                    <select class="form-control">
                        <option value="">Пол</option>
                        <option value="">Мужской</option>
                        <option value="">Женский</option>
                    </select>
                    </div> 
<br>            

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                        <textarea class="form-control" rows="2" placeholder="Дополнительная информация"></textarea>
                    </div> 
<br>            
  
            

            </div>                        
    </div>                          
</div>   
</div>
<!-- /Панель редактор к. лицо --> 
</div>
