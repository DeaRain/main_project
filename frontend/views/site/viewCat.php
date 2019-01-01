<?php

/* @var $this yii\web\View */

$this->title = $title;
$this->params['breadcrumbs'][] = [
    'label' => "Все категории", // название ссылки
    'url' => ['/site/category'] // сама ссылка
];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $articles,
        'itemView' => '_article',
        'layout' => "{items}\n",
    ]);?>
</div>

<div class="row">
    <div align="center">
        <?= \yii\widgets\LinkPager::widget([
            'pagination' => $articles->pagination,
        ]);?>
    </div>
</div>
