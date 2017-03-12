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


<?php
$title='“ПРОФИ ЦЕНТЪР БГ” ЕООД';
$home=Yii::t('common', 'Начало');
$news=Yii::t('common', 'Новини и полезна информация');
$personal=Yii::t('common', 'Анкета-заявка');
$contact=Yii::t('common', 'Контакти');
NavBar::begin([
    'brandLabel' =>'<div class="form-group form-inline" style="height: 0px!important;"><img width=100px" src="/web/images/logo.bmp" style="float:left;margin-top: -10px;">'. $title.'
<a href=""><img width="38px" height="37px" src="/web/icons/google.png" ></a>
<a href="https://www.facebook.com/proficenter.bg/"><img width="40px" src="/web/icons/facebook.png" ></a>
<a href=""><img width="40px" src="/web/icons/viber.png"  title="+359892205510
+380932931199"></a>
<a href="" style="visibility:hidden;"><img width="30px" src="/web/icons/viber.png"  ></a>
</div>',


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


<!-- Page Content -->


        <?= $content ?>



<!-- /.container -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

