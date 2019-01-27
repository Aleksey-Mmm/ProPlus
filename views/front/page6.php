<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Выбор организации';

?>
<div class="jumbotron">
<!-- Панель Выбор организации -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор организации</b> 
    </div> 
  
    <div class="btn-group">
        <a href="<?= Url::to(['front/page9']); ?>" class="btn btn-sm btn-default">Новый</a>
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Введите наименование организации">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Найти</button>
        </span>
    </div>        
                   
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="text-center">Организации</th>

                </tr>
                <tr class="cur">
                    <td class="text-left">Организация 1</td>
                    <td class="text-left wb2 ct">
                        <a href="#myModal1" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-search"></span></a>
                    </td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left">Организация 2</td>
                    <td class="text-left">
                        <a href="#myModal1" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-search"></span></a>
                    </td>
                    </tr>
                <tr class="cur">
                    <td class="text-left">Организация 3</td>
                    <td class="text-left">
                        <a href="#myModal1" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-search"></span></a>
                    </td>               
        </tbody>
    </table>

    <ul class="pagination pagination-sm">
        <li><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
                          
  </div>   



</div>

<!-- /Панель Выбор организации--> 


<!-- Модальгное окно -->
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
        <a href="<?= Url::to(['front/page9']); ?>" class="btn btn-sm btn-default">Редактор</a>
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
                    <td class="lt wb30">Краткое наименование</td>
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
    
<!-- /Модальгное окно -->
  
</div>
