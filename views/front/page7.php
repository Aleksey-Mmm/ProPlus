<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Выбор клиента';

?>
<div class="jumbotron">

<!-- Панель Выбор клиента -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto">
        <b>Клиенты</b> 
    </div> 
  
        <div class="btn-group">
        <a href="<?= Url::to(['front/page8']); ?>" class="btn btn-sm btn-default">Новый</a>
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>       
        </div>
     
  </div>
  
  </div>

  <div class="panel-body">

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Поиск">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Найти</button>
        </span>
    </div>  
<br>
  
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="ct">ФИО</th>
                    <th class="wt20 ct">Телефон</th>
                    <th class="wt2 ct"></th>

                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 1</td>
                    <td>98143213214</td>
                    <td><a href="<?= Url::to(['front/page8']); ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213215</td>
                    <td><a href="<?= Url::to(['front/page8']); ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213216</td>
                    <td><a href="<?= Url::to(['front/page8']); ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>                                
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

<!-- /Панель Выбор клиента-->  
</div>
