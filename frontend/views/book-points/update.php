<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookPoints */

$this->title = 'Update Book Points: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Book Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-points-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
