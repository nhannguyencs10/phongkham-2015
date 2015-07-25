<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Specialist */

$this->title = 'Thêm Chuyên Khoa';
$this->params['breadcrumbs'][] = ['label' => 'Chuyên Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
