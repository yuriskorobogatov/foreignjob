<?php

use yii\bootstrap\Html;

if(\Yii::$app->language == 'ru') {
    ?>
<div class="form-inline" style="height: 30px;margin-top:-30px; position: relative;z-index: 99;" >
    <?php
    echo Html::a(Html::img('@web/images/bg.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'bg']
    ));
    echo Html::a(Html::img('@web/images/ukr.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ukr']
    ));?>
</div>
<?php
}
if(\Yii::$app->language == 'bg') {
?>
<div class="form-inline" style="height: 30px;margin-top:-30px; position: relative;z-index: 99;" >
    <?php
    echo Html::a(Html::img('@web/images/ru.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru']
    ));
    echo Html::a(Html::img('@web/images/ukr.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ukr']
    ));?>
</div>
    <?php
}
if(\Yii::$app->language == 'ukr') {
    ?>
    <div class="form-inline" style="height: 30px;margin-top:-30px; position: relative;z-index: 99;" >
    <?php
    echo Html::a(Html::img('@web/images/ru.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru']
    ));
    echo Html::a(Html::img('@web/images/bg.png', ['width'=>'40','style'=>'padding-right: 10px;margin-top:15px']), array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'bg']
    ));?>
    </div>
    <?php

}