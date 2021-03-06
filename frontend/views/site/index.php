<?php

/* @var $this yii\web\View */

$this->title = 'Main Page';
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
