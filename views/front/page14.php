<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Справочник Услуг';

?>
<div class="jumbotron">

<!-- Панель Выбор Услуги -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Справочник услуг</b> 
    </div> 
  
       <div class="btn-group">
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
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
                    <th colspan="2" class="text-center">Услуги</th>

                </tr>
                <tr class="cur">
                    <td colspan="2" class="text-left "><b>...    (на 1 уравень )</b></td>

                </tr>
                
                <tr class="cur">
                    <td colspan="2" class="text-left"><b>Каталог 1 Уровень2</b></td>
                </tr>
                <tr class="cur">
                    <td colspan="2" class="text-left"><b>Каталог 2 Уровень2</b></td>
                </tr>                
                <tr class="cur">
                    <td class="text-left">Номенклатура 1</td>
                    <td class="ct wt10">150</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Номенклатура 2</td>
                    <td class="ct">150</td>
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
Тут навигация по каталогам   
</div>
</div>

<!-- /Панель Выбор услуги-->       

</div>