<?php
/**
 * индекс сконструированных бланков
 * User: Alex
 * Date: 21.01.2019
 * Time: 20:24
 */


/* @var $this yii\web\View */
/* @var $model app\models\blank\NastrBlank */

/* @var $uslugi [] app\models\blank\NastrBlank */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Услуги';

?>
<div class="jumbotron">
    <!-- Панель Выбора Услуги -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="flex_left">
                <div class="f-auto">
                    <b>Услуги</b>
                </div>

                <div class="btn-group">
                    <a href="<?= Url::to(['nastrbl/add#myModal1']); ?>" class="btn btn-sm btn-default"
                       data-toggle="modal">Добавить</a>
                    <a href="<?= Url::to(['./']); ?>" class="btn btn-sm btn-default"><span
                                class="glyphicon glyphicon-unchecked"></span></a>
                </div>

            </div>

        </div>

        <div class="panel-body">

            <table class="table table-bordered  table-striped  table-hover  table-condensed ">
                <tbody class="text-left">
                <?php
                if ($uslugi):
                    foreach ($uslugi as $usluga):
                        ?>
                        <tr class="cur">
                            <td class="text-left"
                                onClick="document.location='<?= /** @var \app\models\blank\NastrBlank $usluga */
                                Url::to(['nastrbl/edit', 'nid' => $usluga->id]); ?>'"><?=
                                Html::encode($usluga->name); ?></td>
                        </tr>
                    <?php
                    endforeach;
                else:
                    ?>

                    <tr class="cur">
                        <td class="text-left">Услуги не найдены.</td>
                    </tr>
                <?php
                endif;
                ?>
                </tbody>
            </table>

        </div>


    </div>

    <!-- /Панель Выбора Услуги -->

    <!-- Модальгное окно -->

    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Редактор</h4>
                </div>
                <div class="modal-body">

                    <!-- Панель после выбора -->

                    <?php
                    //<div class="panel panel-success">
                    $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'panel panel-success',
                        ],
                        'action' => 'nastrbl/add',
                    ])
                    ?>
                    <div class="panel-heading">
                        <div class="flex_left">
                            <div class="f-auto">
                                <b>Наименование услуги</b>
                            </div>

                            <div class="btn-group">
                                <?= Html::button('Сохранить', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-sm btn-default',
                                ]);
                                //<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Сохранить</button>
                                ?>
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><span
                                            class="glyphicon glyphicon-unchecked"></span></button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <?= $form->field($model, 'name')->textInput(['class' => 'form-control'])->label(false);
                        //<input class="form-control" type="text" placeholder="Наименование услуги">
                        ?>
                    </div>
                    <?php
                    $form::end();
                    //</div>
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Модальгное окно -->

</div>