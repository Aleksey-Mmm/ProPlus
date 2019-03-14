<?php
/**
 * основная часть модального окна организации
 * User: malkov alexey
 * Date: 20.02.2019
 * Time: 13:15
 */

use yii\helpers\Url;

/* @var $org app\models\Org */
?>
<div id="my_org">
    <div class="panel panel-success">
<div class="panel-heading">
    <div class="flex_left">
        <div class="f-auto">

        </div>

        <div class="btn-group">
            <a href="<?= Url::to(['org/edit', 'oid'=>$org->id]); ?>"
               class="btn btn-sm btn-default">Редактор</a>
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-unchecked"></span></button>
        </div>
    </div>
</div>
<div class="panel-body">

    <table class="table table-bordered  table-striped  table-condensed ">
        <tbody class="text-left">
        <tr>
            <th colspan="2" class="ct">Организация</th>
        </tr>
        <tr>
            <td class="lt wb30">Краткое наименование</td>
            <td class="lt"><?= $org->short_name ?></td>
        </tr>
        <tr>
            <td class="lt">Полное наименование</td>
            <td class="lt"><?= $org->full_name ?></td>
        </tr>
        <tr>
            <td class="lt">ОГРН</td>
            <td class="lt"><?= $org->ogrn ?></td>
        </tr>
        <tr>
            <td class="lt">ИНН</td>
            <td class="lt"><?= $org->inn ?></td>
        </tr>
        <tr>
            <td class="lt">КПП</td>
            <td class="lt"><?= $org->kpp ?></td>
        </tr>
        <tr>
            <td class="lt">ОКПО</td>
            <td class="lt"><?= $org->okpo ?></td>
        </tr>
        <tr>
            <td class="lt">ОКВЭД</td>
            <td class="lt"><?= $org->okved ?></td>
        </tr>
        <tr>
            <td class="lt">Юридический адрес</td>
            <td class="lt"><?= $org->jur_address ?></td>
        </tr>
        <tr>
            <td class="lt">Почтовый адрес</td>
            <td class="lt"><?= $org->post_address ?></td>
        </tr>

        </tbody>
    </table>

</div>
    </div>
</div>