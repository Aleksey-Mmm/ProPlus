<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Представители';

?>
<div class="jumbotron">

<!-- Панель Выбор представителя -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto">
        <b>Краткое наименование предприятия</b> 
    </div> 
  
        <div class="btn-group">
        <a href="<?= Url::to(['front/page8']); ?>" class="btn btn-sm btn-default">Новый</a>
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>       
        </div>
     
  </div>
  
  </div>

  <div class="panel-body">
 
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="ct">Представитель</th>
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
  </div>   

</div>

<!-- /Панель Выбор клиента-->  
</div>
