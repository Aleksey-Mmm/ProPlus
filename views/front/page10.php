<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Услуги';

?>
<div class="jumbotron">
<!-- Панель Выбора Услуги -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Услуги</b> 
    </div> 
  
        <div class="btn-group">
        <a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal">Добавить</a>
        <a href="<?= Url::to(['./']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
        </div>
     
  </div>
  
  </div>

  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">

                <tr class="cur">
                    <td class="text-left" onClick="document.location='<?= Url::to(['front/page2']); ?>'">Услуга 1</td>
                </tr>
                
                <tr class="cur">
                    <td class="text-left" onClick="document.location='<?= Url::to(['front/page2']); ?>'">Услуга 2</td>
                </tr>
                <tr class="cur">
                    <td class="text-left" onClick="document.location='<?= Url::to(['front/page2']); ?>'">Услуга 3</td>
                </tr>
                         
        </tbody>
    </table>
                          
  </div>   


</div>

<!-- /Панель Выбора Услуги --> 

<!-- Модальгное окно -->

<div id="myModal1" class="modal fade">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Редактор</h4>
             </div>
                <div class="modal-body">

<!-- Панель после выбора -->
<div class="panel panel-success">
    <div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
           <b>Наименование услуги</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Сохранить</button>
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
    </div>
  
    </div>
    <div class="panel-body">
        <input class="form-control" type="text" placeholder="Наименование услуги">
    </div>

</div>
                </div>
            </div>
     </div>
</div>
<!-- /Модальгное окно -->  
      
</div>
