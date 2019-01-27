<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Редактор бланка';

?>
<div class="jumbotron">

<!-- Панель редактор Услуги  -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Редактор Услуги</b> 
    </div> 
  
    <div class="btn-group">
        <a href="<?= Url::to(['front/page10']); ?>" class="btn btn-sm btn-default">Сохранить</a>
        <a href="<?= Url::to(['front/page10']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
    </div>
     
  </div>
  
  </div>
 
<div class="panel-body">
    <div class="flex_center"> 
    <div class="wt80">

<div class="checkbox lt">
    <label><input type="checkbox">Доступна для выбора</label>
</div>
<div class="checkbox lt">
    <label><input type="checkbox">Бланк по умолчанию</label>
</div>
       

        <input class="form-control" type="text" placeholder="Наименование услуги">
        <br>
        <div class="row">
            <div class="col-xs-5">
                <input class="form-control" type="text" placeholder="Префикс для нумерации бланка" maxlength="4">
            </div> 
        </div>
        <br>                      

<div class="checkbox lt">
    <label><input type="checkbox">Справочник организаций</label>
</div>

<div class="checkbox lt">
    <label><input type="checkbox">Справочник частных лиц</label>
</div>
<div class="checkbox lt">
    <label><input type="checkbox">Календарь</label>
</div>

<div class="checkbox lt">
    <label><input type="checkbox">Оказание услуг</label>
</div>

<div class="checkbox lt">
    <label><input type="checkbox">Обслуживание оборудования</label>
</div>

<div class="checkbox lt">
    <label><input type="checkbox">Серийный номер оборудования равен номеру бланка</label>
</div>

<div class="checkbox lt">
    <label><input type="checkbox">Назначать исполнителя</label>
</div>



<!-- Панель Дополнительные поля -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">

<div>

    <input type="checkbox">

</div> 

    <div class="f-auto" >
        <b>Комментарий клиента</b> 
    </div> 
  
       <div class="btn-group">
        <a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
     </div>
     
  </div>
  
  </div>





</div>

<!-- /Панель Дополнительные поля -->   

<!-- Панель Дополнительные поля -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">

<div>

    <input type="checkbox">

</div> 

    <div class="f-auto" >
        <b>Информация для клиента</b> 
    </div> 
  
    <div class="btn-group">
        <a href="<?= Url::to(['front/page11']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
    </div>
     
  </div>
  
  </div>

  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">

                Тут форматированный текст       
        </tbody>
    </table>
                          
  </div>   

<br>





</div>

<!-- /Панель Дополнительные поля -->                                    
                    
   
    </div>                        
    </div>                          
</div>

</div>
<!-- Модальгное окно 1 -->

<div id="myModal1" class="modal fade">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Редактор</h4>
             </div>
             
    <div class="modal-body">
        <input class="form-control" type="text" placeholder="Наименование заголовка поля">   
    </div>
                
    <div class="modal-footer">
                    
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Сохранить</button>
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
                
    </div>                   
                
                
            </div>
     </div>
</div>
<!-- /Модальгное окно 1 -->



</div>
