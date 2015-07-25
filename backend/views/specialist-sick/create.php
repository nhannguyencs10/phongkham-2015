<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpecialistSick */

$this->title = 'Thêm Bệnh Chuyên Khoa';
$this->params['breadcrumbs'][] = ['label' => 'Bệnh Chuyên Khoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specialist-sick-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
