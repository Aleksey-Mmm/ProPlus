<?php

namespace app\controllers;

use app\models\predpr\Predpr;
use app\models\sotrudnik\EmailConfirmForm;
use app\models\sotrudnik\SignupForm;
use app\models\sotrudnik\Sotrudnik;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\sotrudnik\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'sprav'],
                'rules' => [
                    [
                        'actions' => ['logout', 'sprav'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * выводит список справочников.
     * доступна только зарегистрированным
     *
     * @return string
     */
    public function actionSprav()
    {
        Url::remember();
        return $this->render('sprav');
    }

    /**
     * подтверждение емайл по ссылке из письма
     * отправляем на него пароль для входа.
     *
     * @param $token
     * @return Response
     * @throws BadRequestHttpException
     * @throws \yii\base\Exception
     */
    public function actionEmailConfirm($token)
    {
        try {
            $model = new EmailConfirmForm($token);
        } catch (\InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($sotrudnik = $model->confirmEmail()) { //возвращенного сотрудника сохраняем (если вернулся)
            Yii::$app->getSession()->setFlash("success", "Емайл подтвержден. На него высланы реквизиты для входа.");
            //если подтвердился емайл админа, и он еще не привязан к предприятию
            //создаем предприятие для нового админа и связываем их
            /** @var Sotrudnik $model */
            //echo $sotrudnik->group . ' === '. $sotrudnik->predpr_id;
            if ($sotrudnik->group == Sotrudnik::GROUP_ADMIN && $sotrudnik->predpr_id == 0) {
                //echo "tuuuuuuuutttt";
                $sotrudnik->predpr_id = $this->createPredpr();
                $sotrudnik->save();
            }
        } else {
            Yii::$app->getSession()->setFlash("error", "Ошибка подтверждения емайл.");

        }

        return $this->goHome();
    }

    /**
     * создание предприятия для зарегистрировашегося админа
     *
     * @return int //ид только что созданного предприятия
     */
    protected function createPredpr()
    {
        $predpr = new Predpr();
        $predpr->name = 'Новый сервисный центр.';
        $predpr->save();
        return $predpr->id;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * обработка регистрации нового сотрудника - админа сервиса
     *
     * @return Response|string
     * @throws \yii\base\Exception
     */
    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            // form inputs are valid, do something here
            //здесь создаем только админа.
            if ($model->signUp(Sotrudnik::GROUP_ADMIN)) { //нужно передать, к какой группе будет относиться
                Yii::$app->getSession()->setFlash('success', 'Подтвердите ваш электронный адрес.');
                return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
