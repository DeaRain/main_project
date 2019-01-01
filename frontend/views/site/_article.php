<?php
/**
 * Created by PhpStorm.
 * User: Asscy
 * Date: 30.12.2018
 * Time: 22:47
 */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>


<div class="col-lg-4" style="border-bottom-style: solid;border-bottom-color: #D3D3D3; margin-top: 15px;
height: 320px; overflow: hidden">
    <div class="img-wrap">
        <img src=<?=Yii::$app->storage->getImagePath($model->picture)?> class="img-responsive">
        <div class="img-category"><?= Html::a(Html::encode($model->category->name), ['site/view-cat','id'=>$model->category->id]) ?></div>
        <div class="img-author"><?= Html::encode($model->author." | ".$model->user->username) ?></div>
        <div class="img-date"><?= date('Y-m-d',$model->created_at) ?></div>
    </div>

    <h3 class="article-title"><?= Html::a(Html::encode($model->title), ['site/view-art','id'=>$model->id]) ?> </h3>

    <?php
    $content = \yii\helpers\StringHelper::truncate($model->content,150,'...');
    ?>
    <p><?= Html::encode($content) ?></p>

</div>

