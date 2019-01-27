<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Сотрудники';

?>
<div class="jumbotron">
<!-- Панель Выбор оборудования -->
<div class="panel panel-success">
  <div class="panel-heading">
    <div class="flex_left">
    <div class="f-auto" >
        <b>Справочник</b> 
    </div> 
  
    <div class="btn-group">
        <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
            Добавить
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="<?= Url::to(['front/page22']); ?>">Отдел</a></li>
            <li class="divider"></li>
            <li><a href="<?= Url::to(['front/page24']); ?>">Сотрудник</a></li>
        </ul>
        </div>
        <a href="<?= Url::to(['./']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
     </div>
     
    </div>
  
    </div>
    <div class="panel-body">
    
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Введите наименование">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Найти</button>
            </span>
        </div>        
    </div>
    <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="text-center">Сотрудники</th>

                </tr>
                <tr class="cur">
                    <td class="text-left "><b>...    (на 1 уравень )</b></td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left"><b>Отдел 1 Уровень2</b></td>
                </tr>
                <tr class="cur">
                    <td class="text-left"><b>Отдел 2 Уровень2</b></td>
                </tr>                
                <tr class="cur">
                    <td class="text-left">Иванов Василий Петрович</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Саратов Гаврил семенович</td>
                </tr>                                 
        </tbody>
    </table>
                          
  </div>   


    <ul class="pagination pagination-sm">
        <li><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
<div>
Тут  навигация по каталогам   
</div>
</div>

<!-- /Панель Выбор оборудования--> 

</div>
