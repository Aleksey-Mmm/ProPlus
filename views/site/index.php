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
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
      Выбрать
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Организация</a></li>
      <li><a href="#">Клиент</a></li>
      <li class="divider"></li>
      <li><a href="#">Редактор</a></li>      
    </ul>

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
    Кнопка Выбрать. В меню выбирается или предприятие или  клиент
    для каждого своя таблица  . Если организация то помимо выбора организации дополнительно выбрать контактное лица (через справочники)                  
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
                    <th>Представитель</th>
                    <th class="wt20 ct">Телефон</th>

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

<!-- Панель Услуг-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Услуги</b> 
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
                    <th class="wt5 ct">№</th>
                    <th>Наименование услуги</th>
                    <th class="wt20 ct">Стоимость</th>
                    <th class="wt2 ct"></th>

                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">row 1,col 1</td>
                    <td>row 1,col 2</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>

                </tr>

                <tr>
                    <td>2</td>
                    <td class="text-left">row 2,col 1</td>
                    <td>row 2,col 2</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>

                </tr>

                <tr>
                    <td>3</td>
                    <td class="text-left">row 3,col 1</td>
                    <td>row 3,col 2</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>

                </tr>

            </tbody>
        </table> 
  </div>
</div>


<!-- /Панель -->       

                        
                         
                            
<!-- Панель оборудование-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Оборудование</b> 
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
                    <th class="wt5 ct">№</th>
                    <th class="ct">Наименование</th>
                    <th class="wt20 ct">Серийный номер</th>
                    <th class="wt10 ct">Кол-во</th>
                    <th class="wt2 ct"></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">row 1,col 1</td>
                    <td>row 1,col 2</td>
                    <td>1</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-left">Дополнительная информация для 1, скрыто если не введена</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-left">row 2,col 1</td>
                    <td>row 2,col 2</td>
                    <td>1</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-left">Дополнительная информация для 2, скрыто если не введена</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="text-left">row 3,col 1</td>
                    <td>row 3,col 2</td>
                    <td>1</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-left">Дополнительная информация для 3, скрыто если не введена</td>
                </tr>
            </tbody>
        </table> 
  </div>
</div>


<!-- /Панель -->


<!-- Панель комментарий -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Комментарий клиента</b> 
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

<!-- /Панель комментарий --> 


            
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

