<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Текстовые вставки';

?>
<div class="jumbotron">

<!-- Панель текстовых вставок -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto">
        <b>Текстовые вставки</b> 
    </div> 
  
        <div class="btn-group">
        <a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal">Добавить</a>
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>       
        </div>
     
  </div>
  
  </div>

  <div class="panel-body">
 
    <table class="table table-bordered  table-striped table-hover table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="ct">Список</th>


                </tr>
                <tr class="cur">
                    <td class="lt">Текстовая вставка 1</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Текстовая вставка 2</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Текстовая вставка 3</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Текстовая вставка 4</td>
                </tr>

        Тыкнуть на строку открывается модальный релактор

        </tbody>
    </table>


  </div>   

</div>

<!-- /Панель текстовых вставок-->  

<!-- Модальгное окно 1 -->

<div id="myModal1" class="modal fade">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Редактор</h4>
             </div>
             
    <div class="modal-body">
        <input class="form-control" type="text" placeholder="Текстовая вставка">   
    </div>
                
    <div class="modal-footer">
                    
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Сохранить</button>
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-trash"></span></button> 
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
                
    </div>                   
                
                
            </div>
     </div>
</div>
<!-- /Модальгное окно 1 -->


</div>

