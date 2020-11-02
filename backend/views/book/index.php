<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BookQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app/book', 'Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">
    <p>
        <?= Html::a('添加书籍', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'author',
            'translator',
            'publisher',
            //'published_at',
            //'isbn',
            //'book_img',
            //'created_at',
            //'updated_at',
            //'total_num',
            //'available_num',
            //'reserve_num',
            //'status',
            //'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
