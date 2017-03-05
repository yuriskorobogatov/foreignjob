<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>
<?php $this->beginBody() ?>

<!-- Navigation -->
<?php
$title=Yii::t('common', 'ПРОФИ ЦЕНТЪР БГ');
$home=Yii::t('common', 'Начало');
$news=Yii::t('common', 'Новини и полезна информация');
$personal=Yii::t('common', 'Анкета-заявка');
$contact=Yii::t('common', 'Контакти');
NavBar::begin([
    'brandLabel' =>'<div class="form-group form-inline">'. $title.'
<img width="28px" height="27px" src="/web/icons/google.png" >
<img width="30px" src="/web/icons/facebook.png" >
<img width="30px" src="/web/icons/viber.png"  title="+359892205510
+359892205510">
</div>',


//    'brandLabel' =>
////        Html::img('@web/icons/google.png', ['alt'=>Yii::$app->name,'width'=>'28']),
//        Html::img('@web/icons/facebook.png', ['alt'=>Yii::$app->name,'width'=>'30']),
//        Html::img('@web/icons/viber.png', ['alt'=>Yii::$app->name,'width'=>'30']),


    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],

]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => $home, 'url' => ['/site/index']],
        ['label' => $news, 'url' => ['/site/news']],
        ['label' => $personal, 'url' => ['/site/about']],
        ['label' => $contact, 'url' => ['/site/contact']],
        ['label' => $this->render('main/select-language'),],

    ],
    'encodeLabels' => false,

]);
NavBar::end();
?>
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url(<?= Yii::getAlias('@web').'/images/img1.jpg'  ?>);"></div>
            <div  class="carousel-caption text-info">
                <h2><?= Yii::t('common', 'Сезонна работа на курортите в България') ?></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url(<?= Yii::getAlias('@web').'/images/img2.jpg'  ?>);"></div>
            <div class="carousel-caption text-info">
                <h2><?= Yii::t('common', 'Сезонна работа на курортите в България') ?></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url(<?= Yii::getAlias('@web').'/images/img3.jpg'  ?>);"></div>
            <div class="carousel-caption " >
                <h2><?= Yii::t('common', 'Студентска практика в България') ?></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<!-- Page Content -->
<div class="wrap">

    <div class="container">
        <?= $content ?>
    </div>
</div>

<!-- /.container -->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?=$title ?> <?= date('Y') ?> </p>


        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>




</body>

</html>
