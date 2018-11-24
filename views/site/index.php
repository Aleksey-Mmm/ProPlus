<?php

/* @var $this yii\web\View */

$this->title = 'Сервис';
?>
<div class="site-index">

    <div class="jumbotron">
 -----------
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Сервис</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Главная</a></li>
      <li><a href="#">Бланк</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>



<!-- Панель  выбор бланка -->
<div class="panel panel-default">
<div class="panel-heading">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-9" >  <h3>Услуга</h3></div> 
        <div class="col-xs-6 col-sm-6 col-md-3 text-right">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-default">Выбрать</button>
                <button type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-print"></span></button>
            </div>
            
            
     </div>
     
    </div>
</div>
</div>
<!-- /Панель -->

<h2>Бланк № 111</h2>

<!-- Панель Заказчик -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-9" > <h3>Заказчик</h3>  </div> 

    <div class="col-xs-6 col-sm-6 col-md-3 text-right">
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
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
            <tbody class="text-left">
                <tr>
                    <th>ФИО</th>
                    <th>Телефон</th>

                </tr>
                <tr>
                    <td class="text-left">Иванов Иван Иванович</td>
                    <td>98143213214</td>

                </tr>
                <tr>
                    <td colspan="2">Дополнительная информация</td>
                </tr>
            </tbody>
        </table>
        
  </div>

</div>

<!-- /Панель -->      

<!-- Панель номенклатуры-->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-9" > <h3>Номенклатура</h3>  </div> 
    <div class="col-xs-6 col-sm-6 col-md-3 text-right">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Добавить</a></li>
            <li class="divider"></li>
            <li><a href="#">Удалить</a></li>
        </ul>
     </div>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered  table-striped table-hover table-condensed">
            <tbody>
                <tr>
                    <th>Наименование</th>
                    <th>Серийный номер</th>
                    <th>Кол-во</th>
                </tr>
                <tr>
                    <td class="text-left">row 1,col 1</td>
                    <td>row 1,col 2</td>
                    <td>row 1,col 3</td>
                </tr>
                <tr>
                    <td class="text-left">row 2,col 1</td>
                    <td>row 2,col 2</td>
                    <td>row 2,col 3</td>
                </tr>
                <tr>
                    <td class="text-left">row 3,col 1</td>
                    <td>row 3,col 2</td>
                    <td>row 3,col 3</td>
                </tr>
            </tbody>
        </table> 
  </div>
</div>

<!-- /Панель -->

<!-- Панель описания -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-9" > <h3>Описание неисправности</h3>  </div> 

    <div class="col-xs-6 col-sm-6 col-md-3 text-right">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-default">Добавить</button>
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Добавить</a></li>
            <li class="divider"></li>
            <li><a href="#">Удалить</a></li>
            <li class="divider"></li>
            <li><a href="#">Очистит</a></li>
        </ul>
     </div>
     </div>
     
  </div>
  
  </div>
  <div class="panel-body">
    <table class="table table-bordered  table-striped  table-hover  table-condensed ">
            <tbody class="text-left">

                <tr>
                    <td>row 1,col 1</td>
                </tr>
                <tr>
                    <td>row 2,col 1</td>
                </tr>
                <tr>
                    <td>row 3,col 1</td>
                </tr>
                <tr>
                    <td>row 4,col 1</td>
                </tr>
            </tbody>
        </table>
        
        <textarea class="form-control" rows="3"></textarea>
  </div>

</div>

<!-- /Панель -->      
      
<!-- Панель исполнителя -->
<div class="panel panel-default">
  <div class="panel-heading">
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-9" > <h3>Исполнитель</h3>  </div> 

    <div class="col-xs-6 col-sm-6 col-md-3 text-right">
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
      
      
      ----------       
       
  
    </div>


</div>
