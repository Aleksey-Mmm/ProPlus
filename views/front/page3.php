<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */

$this->title = 'Страница разработки морд - 3';

?>
<div class="jumbotron">

<!-- Панель Обозначения -->
Обозначения

<div class="panel panel-default">

  <div class="panel-body">
   
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    
                    <th class="wt2 ct"></th>
                    <th class="wt20 ct"></th>

                </tr>
                <tr class="cur">
                                        
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-saved"></span></button></td>
                    <td class="text-left">Принять</td>
                </tr>
                <tr class="cur">

                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>
                    <td class="text-left">Удалить</td>
                </tr>
                <tr class="cur">
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-unchecked"></span></button></td>
                    <td class="text-left">Отменить</td>
                </tr>
                <tr class="cur">
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                    <td class="text-left">Редактировать</td>
                </tr>                 
                <tr class="cur">
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-print"></span></button></td>
                    <td class="text-left">Вывести на печать</td>
                </tr>      
                <tr class="cur">
                    
                    <td class="text-left">Зеленый цвет</td>
                    <td class="text-left">Вызываемая форма</td>
                </tr>    
                                
        </tbody>
    </table>
                        
  </div>

</div>

<!-- /Панель --> 







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
Открывается при нажатии на кнопку: выбрать услугу
<!-- Панель Выбор услуги -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор услуги</b> 
    </div> 
     
  </div>
  
  </div>

  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="text-center">Услуга</th>

                </tr>
                <tr class="cur">
                    <td class="text-left ">Наименование услуги 1</td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left">Наименование услуги 2</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Наименование услуги 3</td>
                </tr>                
        </tbody>
    </table>
                          
  </div>   

</div>

<!-- /Панель Выбор услуги-->   


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

<!-- Панель Выбор организации -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор организации</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Введите наименование организации">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Найти</button>
        </span>
    </div>        
                   
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="text-center">Организация</th>

                </tr>
                <tr class="cur">
                    <td class="text-left ">Организация 1</td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left">Организация 2</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Организация 3</td>
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

<!-- /Панель Выбор организации-->   
      
         
   Доступно если выбрано предприятие            
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
Если выбрано Предприятие
<!-- Панель Выбор к. лицо -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор представителя организации</b> 
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
                <tr>
                    <th class="ct">Контактные лица</th>
                    <th class="wt20 ct">Телефон</th>
                    <th class="wt2 ct"></th>

                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 1</td>
                    <td>98143213214</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213215</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213216</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>                                
        </tbody>
    </table>
                          
  </div>   

</div>

<!-- /Панель Выбор к. лицо-->   


Усли выбран как клиент (в принципе можно сделать как контакты скрытого предприятия под названием частные лица)
<!-- Панель Выбор клиента -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Клиенты</b> 
    </div> 
  
        <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>        
        </div>
     
  </div>
  
  </div>

  <div class="panel-body">

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Введите наименование организации">
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
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213215</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Иванов Иван Иванович 2</td>
                    <td>98143213216</td>
                    <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
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



<!-- Панель редактор к. лицо -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
  </div>
</div>
 
<div class="panel-body">





    <div class="flex_center"> 

        <div class="wt50">
            
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Фамилия">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Имя">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Отчество">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                        <input type="text" class="form-control" placeholder="Телефон">
                    </div> 
<br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        <input class="form-control" type="date" placeholder=""  id="example-date-input">
                    </div> 
<br>


            </div>                        
    </div>                          
</div>   
</div>
<!-- /Панель редактор к. лицо --> 



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

                        
<!-- Панель Выбор Услуги -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор услуги</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
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

<!-- Панель Выбор оборудования -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Выбор оборудования</b> 
    </div> 
  
       <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
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
                    <th colspan="2" class="text-center">Оборудование</th>

                </tr>
                <tr class="cur">
                    <td class="text-left "><b>...    (на 1 уравень )</b></td>

                </tr>
                
                <tr class="cur">
                    <td class="text-left"><b>Каталог 1 Уровень2</b></td>
                </tr>
                <tr class="cur">
                    <td class="text-left"><b>Каталог 2 Уровень2</b></td>
                </tr>                
                <tr class="cur">
                    <td class="text-left">Номенклатура 1</td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Номенклатура 2</td>
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

Тыкнув на кнопку добавить 
или на строку оборудования открывается редактор

<!-- Панель редактор оборудования для бланка -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Редактор оборудования</b> 
    </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
     
  </div>
  
  </div>
 
<div class="panel-body">


      
       
    <div class="flex_center"> 

    <div class="wt70">
    <div>
        <label>
             Наименование выбранного оборудовния
        </label>
    </div>
    <br>

        <div class="row">
            <div class="col-xs-10">
                <input class="form-control" type="text" placeholder="Серийный номер">
            </div> 
            <div class="col-xs-2">
                <input class="form-control ct" type="text" placeholder="Кол-во">
            </div>
        </div>
        <br> 
        
        <div class="row">
            <div class="col-xs-10">
                <textarea class="form-control" rows="2" placeholder="Дополнительная информация. Кнопка добавить открывает панель быстрых вставок (для оборудования)"></textarea> 
            </div> 
            <div class="col-xs-1">
                <button type="button" class="btn btn-sm btn-default">Добавить</button>
            </div>
        </div>
        
    </div>                        
    </div>                          
</div>   


</div>

<!-- /Панель редактор оборудования--> 

<!-- Панель редактор оборудования для базы -->
<div class="panel panel-danger">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Редактор оборудования или услуги</b> 
    </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
     
  </div>
  
  </div>
 
<div class="panel-body">
       
    <div class="flex_center"> 
        <div class="wt70">
            <input class="form-control" type="text" placeholder="Наименование">
        </div>                        
    </div>                          
</div>   


</div>

<!-- /Панель редактор оборудования--> 
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

<!-- Панель Вставки -->
<div class="panel panel-success">
  <div class="panel-heading">
<div class="flex_left">

<div>

    <input type="checkbox">

</div> 

    <div class="f-auto" >
        <b>Быстрые вставки</b> 
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
                    <td class="wt2 ct"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                
                <tr class="cur">
                    <td class="text-left">Объект 2</td>
                    <td class="wt2 ct"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr class="cur">
                    <td class="text-left">Объект 3</td>
                    <td class="wt2 ct"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>          
                </tr>                
        </tbody>
    </table>
                          
  </div>   

<br>





</div>

<!-- /Панель Вставки -->       
        
<!-- Панель редактор -->
<div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto" >
            <b>Редактор быстрой вставки</b> 
        </div> 
  
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-saved"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></button>
            <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
     
    </div>
  
</div>

<div class="panel-body">

    <input class="form-control" type="text" placeholder="Наименование поля">
                    
</div>   

</div>




            
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


