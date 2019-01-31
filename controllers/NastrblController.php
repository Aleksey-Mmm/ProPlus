<?php
/**
 * контроллер для бланков.
 * конструктор и т.д.
 * User: Alex
 * Date: 21.01.2019
 * Time: 20:14
 */

namespace app\controllers;



use app\models\blank\NastrBlank;
use app\models\sotrudnik\Sotrudnik;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

class NastrblController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                //'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'add', 'edit'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new NastrBlank();
        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id; // \Yii::$app->user->id;
        $uslugi = NastrBlank::find()->
            where(['predpr_id' => $predpr_id])->
            orderBy('name')->
            all();
        return $this->render('index', compact('uslugi', 'model'));
    }

    public function actionAdd()
    {
        $model = new NastrBlank();
        $model->predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id;
        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash('success', 'Запись добавлена.');
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка добавления новой записи!');
            }
        }

        //return $this->render('index', compact('model'));
        return $this->redirect(['nastrbl/index']);

    }

    /**
     * редактирование настройки бланка
     *
     * @param int $nid  ид бланка
     * @return string|\yii\web\Response
     * @throws ForbiddenHttpException
     */
    public function actionEdit($nid = 0)
    {
        if ($nid == 0) { //сюда не может прийти 0. Какой то косяк, скидываем юзера.
            \Yii::$app->user->logout();
            return $this->goHome();
        }

        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id;
        $model = NastrBlank::findOne(['id'=>$nid, 'predpr_id'=>$predpr_id]);
        if (!$model) {
            throw new ForbiddenHttpException('Ошибка редактирования настройки бланка!');
        }

        if ($model->load(\Yii::$app->request->post())) {
            //var_dump(\Yii::$app->request->post());
            if (ArrayHelper::keyExists('default', \Yii::$app->request->post())) {
                //echo "Eeeeeeee"; бланк назначен по умолчанию. TODO: прописать в предприятии.
            } else {
                //echo "Nooooooo";
            }
//            if (empty($model->dirtyAttributes)) {
//                \Yii::$app->session->setFlash('success', 'Изменений нет');
//
//            } else {
//                \Yii::$app->session->setFlash('warning', 'Есть изменения!');
//                var_dump($model->dirtyAttributes);
//            }
            return $this->redirect(['nastrbl/index']);
        }

        return $this->render('edit', compact('model'));
    }


}