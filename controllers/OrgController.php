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

    /**
     *
     * @return string
     */
    public function actionEdit()
    {
        /** @var Org $org */
        $org = new Org();
        if ($org->load(\Yii::$app->request->post())) {
            var_dump( \Yii::$app->request->post());
        }
        return $this->render('edit', compact('org'));
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
