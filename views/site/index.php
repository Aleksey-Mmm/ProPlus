<?php

/* @var $this yii\web\View */

$this->title = 'Сервис';
?>

<div class="jumbotron">
<!-- Панель бланк -->
<div class="panel panel-default">
<div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Бланк № РО-111</b> 
    </div> 
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-default">Новый</button>
                <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-print"></span></button>
            </div>
    </div>
</div>
</div>
<!-- /Панель -->

<!-- Панель  выбор бланка -->
<div class="panel panel-default">
<div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Услуга</b> 
    </div> 

        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default">Выбрать</button>
        </div>
     
    </div>
</div>
</div>
<!-- /Панель -->

<!-- Панель Заказчик -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Заказчик</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Выбрать</button>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
   
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th>Организация</th>
                </tr>
                <tr>
                    <td class="text-left">ООО ХХХХХХХХХ ХХХХХХ</td>
                </tr>
        </tbody>
    </table>
                        
  </div>

</div>

<!-- /Панель -->      
<!-- Панель к. лицо -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Контактное лицо</b> 
    </div> 
  
        <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Выбрать</button>
        </div>
     
  </div>
  
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th>Контактное лицо</th>
                    <th>Телефон</th>

                </tr>
                <tr>
                    <td class="text-left">Иванов Иван Иванович</td>
                    <td>98143213214</td>
                </tr>
        </tbody>
    </table>

                
                                
  </div>

</div>

<!-- /Панель -->

<!-- Панель доп инфо -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Дополнительная информация</b> 
    </div> 
     
  </div>
  
  </div>
  <div class="panel-body">
    
     <input type="text" class="form-control" placeholder="Адрес доставки"> <br>               
     <input type="text" class="form-control" placeholder="Пароль для передачи оборудования">                          
  </div>

</div>

<!-- /Панель -->           
<!-- Панель номенклатуры-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Номенклатура </b> 
    </div> 
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered   table-hover table-condensed">
            <tbody>
                <tr>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Серийный номер</th>
                    <th>Кол-во</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">row 1,col 1</td>
                    <td>row 1,col 2</td>
                    <td>row 1,col 3</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-left">Дополнительная информация скрыто если не введена</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-left">row 2,col 1</td>
                    <td>row 2,col 2</td>
                    <td>row 2,col 3</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-left">Дополнительная информация скрыто если не введена</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="text-left">row 3,col 1</td>
                    <td>row 3,col 2</td>
                    <td>row 3,col 3</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-left">Дополнительная информация скрыто если не введена</td>
                </tr>
            </tbody>
        </table> 
  </div>
</div>


<!-- /Панель -->

<!-- Панель описания -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Описание неисправности</b> 
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Добавить</a></li>
            <li class="divider"></li>
            <li><a href="#">Очистить</a></li>
        </ul>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">

        
        <textarea class="form-control" rows="3"></textarea>
  </div>

</div>

<!-- /Панель -->      
      
<!-- Панель исполнителя -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Исполнитель</b> 
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Выбрать</button>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Выбрать</a></li>
            <li class="divider"></li>
            <li><a href="#">Удалить</a></li>
        </ul>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
            <tbody class="text-left">
                <tr>
                    <td>Иванов Иван Иванович</td>
                </tr>
            </tbody>
        </table>
        
  </div>

</div>

<!-- /Панель -->      
      
  
</div>

