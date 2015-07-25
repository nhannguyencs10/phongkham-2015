<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PostSick */

$this->title = 'Chỉnh Sửa Bài Viết: ' . ' ' . $model->name_post;
$this->params['breadcrumbs'][] = ['label' => 'Bài Viết Bênh Chuyên Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_post, 'url' => ['view', 'id' => $model->id_post]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-sick-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
