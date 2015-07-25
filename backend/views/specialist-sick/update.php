<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialistSick */

$this->title = 'Chỉnh Sửa Bệnh Chuyên Khoa: ' . ' ' . $model->name_sick;
$this->params['breadcrumbs'][] = ['label' => 'Bệnh Chuyên Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_sick, 'url' => ['view', 'id' => $model->id_sick]];
$this->params['breadcrumbs'][] = 'Chỉnh Sửa';
?>
<div class="specialist-sick-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
