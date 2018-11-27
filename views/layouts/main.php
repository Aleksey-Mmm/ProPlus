<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
         //   'class' => 'navbar-inverse navbar-fixed-top',
            'class' => 'navbar-default',
        ],
    ]);
    try {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
    } catch (Exception $e) {
        throw new \http\Exception\BadUrlException("Ошибка навигации.");
    }
    NavBar::end();

    ?>
    <?php
//
//<!-- Навигатор -->
//<nav class="navbar navbar-default" role="navigation">
//  <!-- Brand and toggle get grouped for better mobile display -->
//  <div class="navbar-header">
//    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
//      <span class="sr-only">Toggle navigation</span>
//      <span class="icon-bar"></span>
//      <span class="icon-bar"></span>
//      <span class="icon-bar"></span>
//    </button>
//    <a class="navbar-brand" href="#">Сервис</a>
//  </div>
//
//  <!-- Collect the nav links, forms, and other content for toggling -->
//  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
//    <ul class="nav navbar-nav">
//      <li class="active"><a href="#">Главная</a></li>
//      <li><a href="#">Бланк</a></li>
//      <li class="dropdown">
//        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
//        <ul class="dropdown-menu">
//          <li><a href="#">Action</a></li>
//          <li><a href="#">Another action</a></li>
//          <li><a href="#">Something else here</a></li>
//          <li class="divider"></li>
//          <li><a href="#">Separated link</a></li>
//          <li class="divider"></li>
//          <li><a href="#">One more separated link</a></li>
//        </ul>
//      </li>
//    </ul>
//
//    <ul class="nav navbar-nav navbar-right">
//      <li><a href="#">Link</a></li>
//      <li class="dropdown">
//        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
//        <ul class="dropdown-menu">
//          <li><a href="#">Action</a></li>
//          <li><a href="#">Another action</a></li>
//          <li><a href="#">Something else here</a></li>
//          <li class="divider"></li>
//          <li><a href="#">Separated link</a></li>
//        </ul>
//      </li>
//    </ul>
//  </div><!-- /.navbar-collapse -->
//</nav>
//<!-- /Навигатор -->
?>

    <div class="container">
        <?=  Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
