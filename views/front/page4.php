<?php
/**
 * Page1 for front develop
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:26
 */

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Журнал услуг';

?>

<div class="jumbotron">
<!-- Панель Журнал -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="flex_left">
    <div class="f-auto" >
        <b>Журнал услуг</b> 
    </div> 
  
       <div class="btn-group">
        <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default">Новый</a>
        <a href="<?= Url::to(['./']); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
   
    <select class="form-control">
        <option value="">Все услуги</option>
        <option value="">Русский</option>
        <option value="">Английский</option>
        <option value="">Французский</option>
    </select>  
    <br>        

            <div class="row">
                <div class="col-xs-5">
                    
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> Период с:</span>
                        <input class="form-control" type="date" placeholder=""  id="example-date-input">
                    </div>                    
                
                </div> 
                <div class="col-xs-7">
                   
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Введите номер бланка или наименование организации">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>                   

                </div>
            </div>
            
                          
                   
  </div>
  <div class="panel-body">
  
     
    <table class="table table-bordered  table-striped  table-hover  table-condensed">
        <tbody class="text-left">
                <tr>
                    <th class="text-center wb10">Номер</th>
                    <th class="text-center wb10">Дата</th>
                    <th class="text-center">Организация</th>
                    <th class="text-center wb15">Исполнитель</th>
                    <th class="text-center wb5"></th>

                </tr>
               
                <tr class="cur" onClick="document.location='<?= Url::to(['front/page1']); ?>'">
                  
                    <td class="text-center">XXX-1</td>
                    <td class="text-center">хх.хх.хххх</td>
                    <td class="text-left">Организация 1</td>
                    <td class="text-left">Иванов В.В.</td>
                    <td class="text-center"><span class="glyphicon glyphicon-chevron-down gi-x"></span></td>

                </tr>
               
                <tr class="cur" onClick="document.location='<?= Url::to(['front/page1']); ?>'">
                    <td class="text-center">XXX-2</td>
                    <td class="text-center">хх.хх.хххх</td>
                    <td class="text-left">Организация 1</td>
                    <td class="text-left">Иванов В.В.</td>
                    <td class="text-center"><span class="glyphicon glyphicon-time gi-x"></span></td>
                </tr>
                <tr class="cur" onClick="document.location='<?= Url::to(['front/page1']); ?>'">
                    <td class="text-center">XXX-3</td>
                    <td class="text-center">хх.хх.хххх</td>
                    <td class="text-left">Организация 1</td>
                    <td class="text-left">Иванов В.В.</td>
                    <td class="text-center"><span class="glyphicon glyphicon-bell gi-x"></span></td>
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

<!-- /Панель Журнал--> 
</div>