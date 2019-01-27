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

    public function actionPage6()
    {
        return $this->render("page6");
    }

    public function actionPage7()
    {
        return $this->render("page7");
    }
    public function actionPage8()
    {
        return $this->render("page8");
    }
    public function actionPage9()
    {
        return $this->render("page9");
    }
    public function actionPage10()
    {
        return $this->render("page10");
    }
    public function actionPage11()
    {
        return $this->render("page11");
    }
    public function actionPage12()
    {
        return $this->render("page12");
    }
    public function actionPage13()
    {
        return $this->render("page13");
    }
    public function actionPage14()
    {
        return $this->render("page14");
    }
    public function actionPage15()
    {
        return $this->render("page15");
    }
    public function actionPage16()
    {
        return $this->render("page16");
    }
    public function actionPage17()
    {
        return $this->render("page17");
    }
    public function actionPage18()
    {
        return $this->render("page18");
    }
    public function actionPage19()
    {
        return $this->render("page19");
    }
        public function actionPage20()
    {
        return $this->render("page20");
    }
        public function actionPage21()
    {
        return $this->render("page21");
    }
        public function actionPage22()
    {
        return $this->render("page22");
    }
        public function actionPage23()
    {
        return $this->render("page23");
    }
        public function actionPage24()
    {
        return $this->render("page24");
    }
        public function actionPage25()
    {
        return $this->render("page25");
    }
        public function actionPage26()
    {
        return $this->render("page26");
    }
        public function actionPage27()
    {
        return $this->render("page27");
    }
        public function actionPage28()
    {
        return $this->render("page28");
    }
        public function actionPage29()
    {
        return $this->render("page29");
    }
        public function actionPage30()
    {
        return $this->render("page30");
    }




    
    

}