<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSickSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tất Cả Bài Viết Bênh Chuyên Khoa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-sick-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php Html::a('Create Post Sick', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_post',
          //  'id_sick',
            [
              'attribute'=>'sick',
              'value'=>'sick.name_sick',
            ],
            'name_post',
//            'content:html',
            'create_day',
            // 'status',
            [
              'attribute'=>'statusgroup',
              'value'=>'statusgroup.name',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
