<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Specialist */

$this->title = 'Chỉnh Sửa Chuyên Khoa: ' . ' ' . $model->name_specialist;
$this->params['breadcrumbs'][] = ['label' => 'Chuyên Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_specialist, 'url' => ['view', 'id' => $model->id_specialist]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specialist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
