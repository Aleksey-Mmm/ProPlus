<?php

/* @var $this yii\web\View */
/* @var $fizlica app\models\FizLico */
/* @var $fizlico app\models\FizLico */


use yii\helpers\Url;
$this->title = 'Выбор клиента';

?>
<div class="jumbotron">

    <!-- Панель Выбор клиента -->
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto">
                    <b>Клиенты</b>
                </div>

                <div class="btn-group">
                    <a href="<?= Url::to(['fizlico/edit']); ?>" class="btn btn-sm btn-default">Новый</a>
                    <a href="<?= Url::previous(); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-unchecked"></span></a>
                </div>

            </div>

        </div>

        <div class="panel-body">

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск">
                <span class="input-group-btn">
            <button class="btn btn-default" type="button">Найти</button>
        </span>
            </div>
            <br>

            <table class="table table-bordered  table-striped  table-hover  table-condensed ">
                <tbody class="text-left">
                <tr>
                    <th class="ct">ФИО</th>
                    <th class="wb20 ct">Телефон</th>
                    <th class="wb2 ct"></th>
                </tr>
                <?php
                if ($fizlica) {
                    foreach ($fizlica as $fizlico) {
                ?>
                <tr class="cur">
                    <td class="text-left"><?= $fizlico->fam. ' '. $fizlico->name. ' '. $fizlico->otch; ?></td>
                    <td><?= $fizlico->telephone; ?></td>
                    <td><a href="<?= Url::current(['fizlico/edit', 'fid'=>$fizlico->id]); ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
                </tr>
                <?php
                    }
                ?>
                <tr class="cur">
                    <td class="text-left"></td>
                    <td></td>
                    <td></td>
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

    <!-- /Панель Выбор клиента-->
</div>
