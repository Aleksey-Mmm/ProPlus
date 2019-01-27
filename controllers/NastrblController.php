<?php
/**
 * контроллер для бланков.
 * конструктор и т.д.
 * User: Alex
 * Date: 21.01.2019
 * Time: 20:14
 */

namespace app\controllers;


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
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}