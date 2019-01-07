<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */

$this->title = 'Страница разработки морд - 2';

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
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
     </div>
     
  </div>
  
  </div>

  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">

                <tr class="cur">
                    <td class="text-left ">Объект 1</td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left">Объект 2</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Объект 3</td>
                </tr>                
        </tbody>
    </table>
                          
  </div>   


</div>

<!-- /Панель Выбора Услуги -->   

<!-- Панель редактор Услуги  -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Редактор Услуги</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
     </div>
     
  </div>
  
  </div>
 
<div class="panel-body">
    <div class="flex_center"> 
    <div class="bl70">

        <input class="form-control" type="text" placeholder="Наименование услуги">
        <br>
        <div class="row">
            <div class="col-xs-6">
                <input class="form-control" type="text" placeholder="Префикс для нумерации бланка" maxlength="4">
            </div> 
        </div>
        <br>                      


<label class="checkbox cur lt">
    <input type="checkbox"> Оказание услуг
</label>


<label class="checkbox cur lt">
    <input type="checkbox"> Обслуживание оборудования
</label>

<label class="checkbox cur lt">
    <input type="checkbox"> Использовать комментарий клиента
</label>

<label class="checkbox cur lt">
    <input type="checkbox"> Назначать исполнителя сразу
</label>
  

<!-- Панель Дополнительные поля -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">

<div>

    <input type="checkbox">

</div> 

    <div class="f-auto" >
        <b>Дополнительные поля</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
     </div>
     
  </div>
  
  </div>

  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">

                <tr class="cur">
                    <td class="text-left ">Объект 1</td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left">Объект 2</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Объект 3</td>
                </tr>                
        </tbody>
    </table>
                          
  </div>   

<br>





</div>

<!-- /Панель Дополнительные поля -->       
        
<!-- Панель редактор -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
     
    </div>
  
</div>

<div class="panel-body">

    <input class="form-control" type="text" placeholder="Наименование дополнительного поля">
                    
</div>   

</div>

<!-- /Панель редактор --> 

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
        <button type="button" class="btn btn-sm btn-default">Редактировать</button>
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
 <!-- Панель редактор  для информации-->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
     
    </div>
  
</div>

<div class="panel-body">
     <textarea class="form-control" rows="3" placeholder="Тут полноценный редактор как на Папосе"></textarea>

                    
</div>   

</div>

<!-- /Панель редактор -->                               
                    
   
    </div>                        
    </div>                          
</div>

</div>


</div>
