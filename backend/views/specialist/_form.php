<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Status;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Specialist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_specialist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_day')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(
                    ArrayHelper::map(Status::find()->all(), 'id', 'name'),
                        []
                        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
