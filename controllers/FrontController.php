<?php
/**
 * контроллер для разработки интерфейсов страниц
 * User: Alex
 * Date: 12.12.2018
 * Time: 22:21
 */

namespace app\controllers;


use app\entities\Sotrudnik;
use yii\web\Controller;

class FrontController extends Controller
{
    public function actionPage1()
    {
        return $this->render("page1");
    }

    public function actionPage2()
    {
        return $this->render("page2");
    }

    public function actionPage3()
    {
        return $this->render("page3");
    }

    public function actionPage4()
    {
        return $this->render("page4");
    }

    public function actionPage5()
    {
        $sotr = (new Sotrudnik());
        $sotr->setFam("pupkin");
        return $this->render("page5", compact('sotr'));
    }

}