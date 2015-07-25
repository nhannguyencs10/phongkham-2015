<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialistSicktSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialist-sick-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sick') ?>

    <?= $form->field($model, 'id_specialist') ?>

    <?= $form->field($model, 'name_sick') ?>

    <?= $form->field($model, 'create_day') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
