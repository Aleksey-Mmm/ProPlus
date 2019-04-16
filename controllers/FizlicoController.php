<?php

namespace app\controllers;

use app\models\FizLico;
use app\models\sotrudnik\Sotrudnik;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

class FizlicoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                //'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'add', 'edit', 'detail'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id;

        $fizlica = FizLico::find()
            ->where(['predpr_id'=>$predpr_id, 'deleted'=>0])
            ->orderBy('fam')
            ->all();

        return $this->render('index', compact('fizlica'));
    }

    /**
     * @param int $fid
     * @return string|\yii\web\Response
     * @throws ForbiddenHttpException
     */
    public function actionEdit($fid = 0)
    {
        $predpr_id = Sotrudnik::findOne(\Yii::$app->user->id)->predpr_id;
        if ($fid == 0) { //новое частное лицо
            $fizlico = new FizLico();
            $fizlico->loadDefaultValues();
            $fizlico->predpr_id = $predpr_id;

        } else {
            $fizlico = FizLico::find()
                ->where(['id'=>$fid, 'predpr_id'=>$predpr_id])
                ->one();
            if (!$fizlico) {
                throw new ForbiddenHttpException('Ошибка редактирования реквизитов!');
            }
        }

        if ($fizlico->load(\Yii::$app->request->post())) {
            if ($fizlico->save()) {
                \Yii::$app->session->setFlash('success', 'Реквизиты сохранены.');
            }
            if (\Yii::$app->request->get('per-page')) { //если есть пагинация, чтоб вернуться на ту же страницу
                $request = \Yii::$app->request;
                $backUrl = ['fizlico/', 'page'=>$request->get('page'), 'per-page'=>$request->get('per-page')];
            } else {
                $backUrl = ['fizlico/'];
            }
            return $this->redirect($backUrl);
        }

        return $this->render('edit', compact('fizlico'));
    }

}
