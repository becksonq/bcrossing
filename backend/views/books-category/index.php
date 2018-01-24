<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BooksCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Books Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_name',
            'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
