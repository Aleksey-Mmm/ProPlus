<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Сотрудник';

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
            Сохранить
            <span class="caret"></span>
            </button>
                <ul class="dropdown-menu">
                    <li><a href="#myModal2" data-toggle="modal">Сохранить</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= Url::to(['front/page21']);?>">Сохранить и закрыть</a></li>
                </ul>
        </div>           

            <a href="<?= Url::to(['front/page21']);?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>   
        </div>
  </div>
</div>
 
<div class="panel-body">

    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Профиль</a></li>
        <li><a href="<?= Url::to(['front/page26']); ?>">Логин</a></li>
        <li><a href="<?= Url::to(['front/page25']); ?>">Права</a></li>
        <li><a href="<?= Url::to(['front/page27']); ?>">Служебное</a></li>
    </ul>
<br>


    <div class="flex_center"> 

        <div class="wb50">
            
                    <div class="input-group" title="Фамилия">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Фамилия">
                    </div> 
<br>
                    <div class="input-group" title="Имя">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Имя">
                    </div> 
<br>
                    <div class="input-group" title="Отчество">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Отчество">
                    </div> 
<br>
                    <div class="input-group" title="Телефлон">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                        <input type="text" class="form-control" placeholder="Телефон">
                    </div> 
<br>
                   
                    <div class="input-group" title="e-mail">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="text" class="form-control" placeholder="е-mail">
                    </div> 
<br>

                    <div class="input-group" title="День рождения">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-gift"></span></span>
                        <input class="form-control" type="date" placeholder=""  id="example-date-input">
                    </div> 
<br>

                    <div class="input-group" title="Пол">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tree-deciduous"></span></span>
                    <select class="form-control">
                        <option value="">Пол</option>
                        <option value="">Мужской</option>
                        <option value="">Женский</option>
                    </select>
                    </div> 
<br>            

<br>
            
                    <div class="input-group" title="Дополнительная информация">
                        при переходе на страницу  если были изменения запросить подтверждение на изменение.
<a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal">окно</a>
                    </div> 
<br>     
            

            </div>                        
    </div>                          
</div>   
</div>
<!-- /Панель редактор к. лицо --> 
<!-- Модальгное окно 1 -->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert alert-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Внимание!</h4>
                </div>
                <div class="modal-body">

Все изменения учетной записи будут сохранены.  
                   Продолжить?
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Сохранить</button>
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
                </div>
            </div>
        </div>
    </div>
<!-- /Модальгное окно 1 -->
<!-- Модальгное окно 2 -->

    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header alert alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Внимание!</h4>
                </div>
                <div class="modal-body">

Изменения сохранены!
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
                </div>
            </div>
        </div>
    </div>
<!-- /Модальгное окно 2 -->

</div>

