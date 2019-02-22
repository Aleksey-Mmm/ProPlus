<?php
/* @var $this yii\web\View */

/* @var $orgs app\models\Org */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

Pjax::begin(); Pjax::end();

$this->title = 'Выбор организации';

//\app\assets\OrgAsset::register($this);
$this->registerJs('
    $(".my_button").on("click", function(e) {
        var oid = this.dataset.oid;
        //e.preventDefault(); //отменяем стандартный get для ссылки    
        $.pjax.reload({container:"#my_org", url:"org?oid="+oid, replace:false});
        //$("#myModal1").modal("show")
    });
');
?>
<div class="jumbotron">
    <!-- Панель Выбор организации -->

    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto">
                    <b>Выбор организации</b>
                </div>

                <div class="btn-group">
                    <a href="<?= Url::to(['org/edit']); ?>" class="btn btn-sm btn-default">Новая</a>
                    <a href="<?= Url::to(['front/page1']); ?>" class="btn btn-sm btn-default"><span
                                class="glyphicon glyphicon-unchecked"></span></a>
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
                    <th colspan="2" class="text-center">Организации</th>
                </tr>
                <?php
                if ($orgs) {
                    foreach ($orgs as $org) {
                        ?>
                        <tr class="cur">
                            <td class="text-left"><?= /** @var \app\models\Org $org */
                                Html::encode($org->short_name); ?></td>
                            <td class="text-left wb2 ct">
                                <button class="btn btn-xs btn-default my_button" data-oid="<?= $org->id ?>" data-toggle="modal" data-target="#myModal1"><span
                                            class="glyphicon glyphicon-search"></span></button>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr class="cur">
                        <td class="text-left">Организации не найдены</td>
                    </tr>
                    <?php
                }
                ?>

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


    <!-- Модальгное окно -->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Реквизиты</h4>
                </div>
                <div class="modal-body">

                    <!-- Панель Реквизиты -->

                        <?= $this->render('_org', compact('org')); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- /Модальгное окно -->

</div>