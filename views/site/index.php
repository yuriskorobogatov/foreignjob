<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
    .carousel-caption {
        top: 1px;
        bottom: 0;
    }
    .carousel-indicators {
        top: 1px;
        bottom: 0;
    }
</style>
<script>$('.carousel').carousel({
        interval: 2000; //changes the speed
    });</script>
<header id="myCarousel" class="carousel slide" style="height: 100%; margin: 0 auto">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
        <div class="item active">
            <div  class="carousel-caption text-info" >
                <h2><?= Yii::t('common', 'Сезонна работа на курортите в България') ?></h2>
            </div>
            <div class="fill" style="background-image:url(<?= Yii::getAlias('@web').'/images/img1.jpg'  ?>); "></div>

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
                <h2 style="color:black;"><?= Yii::t('common', 'Студентска практика в България') ?></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev" style="font-size: 150px;"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next" style="font-size: 150px;"></span>
    </a>
</header>

    




