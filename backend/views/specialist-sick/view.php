<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialistSick */

$this->title = $model->id_sick;
$this->params['breadcrumbs'][] = ['label' => 'Specialist Sicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialist-sick-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sick], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sick], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sick',
            'id_specialist',
            'name_sick',
            'create_day',
            'status',
        ],
    ]) ?>

</div>
