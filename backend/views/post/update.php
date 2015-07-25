<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Post */

$this->title = 'Chỉnh Sửa Bài Viết: ' . ' ' . $model->name_post;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_post, 'url' => ['view', 'id' => $model->id_post]];
$this->params['breadcrumbs'][] = 'Chỉnh Sửa';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
