<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SpecialistSicktSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tất Cả Bệnh Chuyên Khoa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialist-sick-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php Html::a('Create Specialist Sick', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_sick',
            //'id_specialist',
            [
              'attribute'=>'specialist',
              'value'=>'specialist.name_specialist',
            ],
            'name_sick',
            'create_day',
//            'status',
            [
              'attribute'=>'statusgroup',
              'value'=>'statusgroup.name',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
