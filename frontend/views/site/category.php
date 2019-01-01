<?php

/* @var $this yii\web\View */

$this->title = 'Все категории';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row" style="column-count: 3">
<?php foreach($categoryes as $category):?>
    <?=\yii\helpers\Html::a("$category->name", ['site/view-cat','id'=>$category->id], ['class' => 'list-group-item']); ?>
<?php endforeach;?>
</div>
