<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\BookPoints */

$this->title = 'Create Book Points';
$this->params['breadcrumbs'][] = ['label' => 'Book Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-points-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
