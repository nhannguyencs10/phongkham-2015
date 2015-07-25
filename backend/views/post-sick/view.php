<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PostSick */

$this->title = $model->id_post;
$this->params['breadcrumbs'][] = ['label' => 'Post Sicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-sick-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_post], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_post], [
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
            'id_post',
            'id_sick',
            'name_post',
            'content:ntext',
            'create_day',
            'status',
        ],
    ]) ?>

</div>
