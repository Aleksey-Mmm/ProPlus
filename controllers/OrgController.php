<?php

namespace app\controllers;

use app\models\Org;
use app\models\sotrudnik\Sotrudnik;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

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
     * @param int $oid ид редактируемой организации. если =0 то добавляем новую орг-ю.
     * @return string
     * @throws ForbiddenHttpException
     */
    public function actionEdit($oid = 0)
    {
        /** @var Org $org */
        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id;
        if ($oid > 0) {
            $org = Org::findOne(['id'=>$oid, 'predpr_id'=>$predpr_id]);
            if (!$org) {
                throw new ForbiddenHttpException('Ошибка редактирования реквизитов организации!');
            }
        } else {
            $org = new Org();
            $org->loadDefaultValues();
            $org->predpr_id = $predpr_id;
        }

        if ($org->load(\Yii::$app->request->post())) {
            if ($org->validate()) {
                if ($org->save(false)) {
                    \Yii::$app->session->setFlash('success', 'Реквизиты организации сохранены.');
                }
            }
           return $this->redirect(['org/']);
            //var_dump( \Yii::$app->request->post());
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
