<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Post */

$this->title = 'Tạo Bài Viết';
$this->params['breadcrumbs'][] = ['label' => 'Bài Viết', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
