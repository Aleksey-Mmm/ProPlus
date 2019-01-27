<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Страница разработки морд - 1';

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
                <a href="<?= Url::to(['front/page4']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
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
        <b>Услуга ХХХХ ХХХХХХ</b> 
    </div> 

        <div class="btn-group">
            <a href="#myModal1" class="btn btn-sm btn-default" data-toggle="modal">Выбрать</a>
        </div>
     
    </div>
</div>
</div>


<!-- /Панель выбор бланка -->

<!-- Панель  заказчик -->
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
        <li><a href="<?= Url::to(['front/page6']);?>">Организация</a></li>
        <li class="divider"></li>
        <li><a href="<?= Url::to(['front/page7']);?>">Клиент</a></li>
    </ul>

     </div>
     
    </div>
</div>
</div>
<!-- Панель  заказчик -->

<!-- Панель Заказчик после выбора организации -->
<div class="panel panel-success">
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
        <li><a href="<?= Url::to(['front/page6']);?>">Организация</a></li>
        <li class="divider"></li>
        <li><a href="<?= Url::to(['front/page7']);?>">Клиент</a></li>
    </ul>

     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
   
    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th>Организация</th>
                </tr>
                <tr>
                    <td class="text-left">ООО ХХХХХХХХХ ХХХХХХ</td>
                </tr>
        </tbody>
    </table>
 
<!-- Панель  к. лицо -->
<div class="panel panel-default">
<div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Представитель</b> 
    </div> 

        <div class="btn-group">
        <a href="<?= Url::to(['front/page12']); ?>" class="btn btn-sm btn-default">Выбрать</a>
        </div>
     
    </div>
</div>
</div>
<!-- /Панель  к. лицо  --> 

    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="ct">Ф.И.О</th>
                    <th class="wb20 ct">Телефон</th>

                </tr>
                <tr>
                    <td class="text-left">Иванов Иван Иванович</td>
                    <td class="ct">98143213214</td>
                </tr>
        </tbody>
    </table>

               
Отображается кога выбрана Организация    
Пока представитель не выбран таблица не видима                                          
  </div>

</div>

<!-- /Панель к. лицо-->   

      
       
<!-- Панель к. лицо после выбора -->
<div class="panel panel-success">
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
        <li><a href="<?= Url::to(['front/page6']);?>">Организация</a></li>
        <li class="divider"></li>
        <li><a href="<?= Url::to(['front/page7']);?>">Клиент</a></li>
    </ul>

     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th class="ct">Ф.И.О</th>
                    <th class="wb20 ct">Телефон</th>

                </tr>
                <tr>
                    <td class="text-left">Иванов Иван Иванович</td>
                    <td class="ct">98143213214</td>
                </tr>
        </tbody>
    </table>

Отображается кога выбран Частное лицо                   
                                
  </div>

</div>

<!-- /Панель к. лицо после выбора -->



<!-- Панель Услуг-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Услуги</b> 
    </div> 
    <div class="btn-group">
        <a href="<?= Url::to(['front/page14']); ?>" class="btn btn-sm btn-default">Добавить</a>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered   table-hover table-condensed">
            <tbody>
                <tr>
                    <th class="wb5 ct">№</th>
                    <th>Наименование услуги</th>
                    <th class="wb20 ct">Стоимость</th>
                    <th class="wb2 ct"></th>

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


<!-- /Панель Услуг -->       

                        
                         
                            
<!-- Панель оборудование-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Оборудование</b> 
    </div> 
    <div class="btn-group">
        <a href="<?= Url::to(['front/page15']); ?>" class="btn btn-sm btn-default">Добавить</a>
    </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered   table-hover table-condensed">
            <tbody>
                <tr>
                    <th class="wb5 ct">№</th>
                    <th class="ct">Наименование</th>
                    <th class="wb20 ct">Серийный номер</th>
                    <th class="wb10 ct">Кол-во</th>
                    <th class="wb2 ct"></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">row 1,col 1</td>
                    <td>row 1,col 2</td>
                    <td>1</td>
                    <td><a href="#myModal2" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-left">Дополнительная информация для 1, скрыто если не введена</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-left">row 2,col 1</td>
                    <td>row 2,col 2</td>
                    <td>1</td>
                    <td><a href="#myModal2" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-left">Дополнительная информация для 2, скрыто если не введена</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="text-left">row 3,col 1</td>
                    <td>row 3,col 2</td>
                    <td>1</td>
                    <td><a href="#myModal2" class="btn btn-xs btn-default" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a></td>
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
        <a href="#myModal3" class="btn btn-sm btn-default" data-toggle="modal">Добавить</a>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="<?= Url::to(['front/page13']); ?>">Редактор</a></li>
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
        <a href="#myModal4" class="btn btn-sm btn-default" data-toggle="modal">Выбрать</a>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#myModal4" data-toggle="modal">Выбрать</a></li>
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



<!-- Модальгное окно 1 -->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Выбор услуги</h4>
                </div>
                <div class="modal-body">

    <table class="table table-bordered  table-striped  table-hover  table-condensed">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
                </div>
            </div>
        </div>
    </div>
<!-- /Модальгное окно 1 -->




<!-- Модальгное окно 2 -->

    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Оборудование</h4>
                </div>
                <div class="modal-body">

    <div class="flex_center"> 
        <div class="wb80">
<label> Наименование выбранной номенклатуры</label>
<br>
<br>
            <div class="row">
                <div class="col-xs-9">
                    <input class="form-control" type="text" placeholder="Серийный номер">
                </div> 
                <div class="col-xs-3">
                    <input class="form-control ct" type="text" placeholder="кол-во">
                </div>
            </div> 
    <br> 
    <textarea class="form-control" rows="3" placeholder="Дополнительная информация"></textarea>                        
                    
        </div>
    </div>
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
<!-- /Модальгное окно 2 -->

<!-- Модальгное окно 3 -->

<div id="myModal3" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Текстовые вставки</h4>
            </div>
    <div class="modal-body">
 
     
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


        </tbody>
    </table>


        </div>
    <div class="modal-footer">
                    
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
                
    </div>        
        
        
    </div>
    </div>
</div>    
    
<!-- /Модальгное окно 3 -->

<!-- Модальгное окно 4 -->

<div id="myModal4" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Исполнители</h4>
            </div>
    <div class="modal-body">
 
     
    <table class="table table-bordered  table-striped table-hover table-condensed ">
        <tbody class="text-left">
                <tr>
                    <th colspan="2" class="ct">Список</th>


                </tr>
                <tr class="cur">
                    <td class="lt">Исполнитель 1</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Исполнитель 2</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Исполнитель 3</td>
                </tr>
                <tr class="cur">
                    <td class="lt">Исполнитель 4</td>
                </tr>


        </tbody>
    </table>


        </div>
    <div class="modal-footer">
                    
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-unchecked"></span></button>
        </div>
                
    </div>        
        
        
    </div>
    </div>
</div>    
    
<!-- /Модальгное окно 4 -->



      
  
</div>
