<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BooksPointsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book Points';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-points-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Book Points', ['book-points/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
						[
                'attribute' => 'title',
                'value'     => function ( $data ){
                    return Html::a( Html::encode( $data->title ), Url::to( [ 'books/view-by-point', 'id' => $data->id ] ) );
                },
                'format' => 'raw',
						],
//
            'address:ntext',
//            'created_at',
//            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
