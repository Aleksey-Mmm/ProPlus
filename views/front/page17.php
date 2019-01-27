<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Кабинет';

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
        Настройки
        </div>
        <a href="<?= Url::to(['front/page20']); ?>" class="list-group-item lt">Учетная запись</a>
        <a href="#myModal1" class="list-group-item lt" data-toggle="modal">Реквизиты предприятия</a>
        <a href="#myModal2" class="list-group-item lt" data-toggle="modal">Расчетный счет</a>

    </div>


<!-- /Панель Выбора -->

<!-- Модальгное окно реквизиты предприятия-->
    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Реквизиты</h4>
                </div>
                <div class="modal-body">

<!-- Панель Реквизиты -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
       
    </div> 
  
    <div class="btn-group">
        <a href="<?= Url::to(['front/page18']); ?>" class="btn btn-sm btn-default">Редактор</a>
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="ct">Организация</th>


                </tr>
                <tr>
                    <td class="lt wt30">Краткое наименование</td>
                    <td class="lt">Педприятие 1 ООО</td>
                </tr>
                <tr>
                    <td class="lt">Полное наименование</td>
                    <td class="lt">Общество с ограниченной ответсвенностью "Педприятие 1"</td>
                </tr>
                <tr>
                    <td class="lt">ОГРН</td>
                    <td class="lt">98143213214</td>
                </tr>
                <tr>
                    <td class="lt">ИНН</td>
                    <td class="lt">143501420835</td>
                </tr>
                <tr>
                    <td class="lt">КПП</td>
                    <td class="lt">143501001</td>
                </tr>
                <tr>
                    <td class="lt">ОКПО</td>
                    <td class="lt">50451</td>
                </tr>
                <tr>
                    <td class="lt">ОКВЭД</td>
                    <td class="lt">50807445</td>
                </tr>
                <tr>
                    <td class="lt">Юридический адрес</td>
                    <td class="lt">674014 г. Жиганск ул. Хорошая 5, кв. 3 </td>
                </tr>
                <tr>
                    <td class="lt">Почтовый адрес</td>
                    <td class="lt">674014 г. Жиганск ул. Хорошая 5, кв. 3 </td>
                </tr>

        </tbody>
    </table>
          
                    
                </div>

            </div>
        </div>
    </div>
    </div>
</div>    

<!-- /Панель Выбора -->
<!-- /Модальгное окно -->

<!-- Модальгное окно реквизиты банка-->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Реквизиты</h4>
                </div>
                <div class="modal-body">

<!-- Панель Реквизиты -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
       
    </div> 
  
    <div class="btn-group">
        <a href="<?= Url::to(['front/page19']); ?>" class="btn btn-sm btn-default">Редактор</a>
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="ct">Расчетный счет</th>


                </tr>
                <tr>
                    <td class="lt wt30">Наименование банка</td>
                    <td class="lt">ВТБ в г. Уськут</td>
                </tr>
                <tr>
                    <td class="lt">БИК</td>
                    <td class="lt">Общество с ограниченной ответсвенностью "Педприятие 1"</td>
                </tr>
                <tr>
                    <td class="lt">Расчетный счет</td>
                    <td class="lt">98143213214</td>
                </tr>
                <tr>
                    <td class="lt">Корреспондентский счет</td>
                    <td class="lt">143501420835</td>
                </tr>
                
        </tbody>
    </table>
          
                    
                </div>

            </div>
        </div>
    </div>
    </div>
</div>    
<!-- /Панель Реквизиты -->    
<!-- /Модальгное окно -->
   

</div>
