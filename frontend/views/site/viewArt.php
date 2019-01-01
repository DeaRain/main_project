<?php

/* @var $this yii\web\View */

$this->title = $article->title;

$this->params['breadcrumbs'][] = [
    'label' => $article->category->name, // название ссылки
    'url' => ['/site/view-cat','id'=>$article->category->id] // сама ссылка
];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

    <div class="col-lg-10">
    <div class="img-wrap">
        <img src=<?=Yii::$app->storage->getImagePath($article->picture)?> class="img-responsive">
        <div class="img-category"><?= \yii\helpers\Html::encode($article->category->name) ?></div>
        <div class="img-author"><?= \yii\helpers\Html::encode($article->author); ?></div>
        <div class="img-date"><?= date('Y-m-d',$article->created_at) ?></div>
    </div>


    <h3><?= \yii\helpers\Html::encode($article->title) ?></h3>
    <p><?= \yii\helpers\Html::encode($article->content) ?></p>

    </div>


</div>

<!--<div class="row">-->
<!--    <div align="center">-->
<!--        --><?//= \yii\widgets\LinkPager::widget([
//            'pagination' => $articles->pagination,
//        ]);?>
<!--    </div>-->
<!--</div>-->
