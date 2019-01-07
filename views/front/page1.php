<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */

$this->title = 'Страница разработки морд - 1';

?>
<div class="jumbotron">

<!-- Панель Выбора -->
<div class="panel panel-default">
    <div class="panel-heading">
    <div class="flex_left">
    <div class="f-auto" >
        <b>Выбор</b> 
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
                    <th class="text-center">Объект</th>

                </tr>
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

<!-- /Панель Выбора -->   

<!-- Панель редактор -->
<div class="panel panel-default">
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
        <div class="bl70">
            <div class="row">
                <div class="col-xs-10">
                    <input class="form-control" type="text" placeholder="Текст">
                </div> 
                <div class="col-xs-2">
                    <input class="form-control ct" type="text" placeholder="текст">
                </div>
            </div>
    <br>
    <input class="form-control" type="text" placeholder="Текст">
    <br> 
    <textarea class="form-control" rows="3" placeholder="Дополнительная информация"></textarea>    
------------------
        <div class="lt">   
            <label class="checkbox cur">
                <input type="checkbox"> Оказание услуг
            </label>
        </div>
        <div class="lt">
            <label class="checkbox cur">
                <input type="checkbox"> Обслуживание оборудования
            </label>
        </div>     
--------------           
        <label class="checkbox cur lt">
            <input type="checkbox"> Оказание услуг
        </label>
        <label class="checkbox cur lt">
            <input type="checkbox"> Обслуживание оорудования
        </label>
------------------------                  
        </div>                        
    </div>                          
</div>   
</div>
<!-- /Панель редактор --> 
  
</div>
