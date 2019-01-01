<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <button>Загрузить</button>
    <?php ActiveForm::end() ?>
<!--    sha1_file($this->image->tempName);-->
</div>
