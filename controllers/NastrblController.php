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
use yii\web\Controller;

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
                        'actions' => ['index', 'add'],
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


}