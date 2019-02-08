<?php

namespace app\controllers;

use app\models\Org;
use app\models\sotrudnik\Sotrudnik;
use yii\filters\AccessControl;
use yii\web\Controller;

class OrgController extends Controller
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
    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionIndex()
    {
        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id; // \Yii::$app->user->id;
        $orgs = Org::find()->
        where(['predpr_id' => $predpr_id])->
        orderBy('short_name')->
        all();
        return $this->render('index', compact('orgs'));
    }

}
