<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Specialist;
use backend\models\Status;



/* @var $this yii\web\View */
/* @var $model backend\models\SpecialistSick */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specialist-sick-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id_specialist')->dropDownList(
                    ArrayHelper::map(Specialist::find()->all(), 'id_specialist', 'name_specialist'),
                        ['prompt'=>'Select specialist']
                        ) ?>

    <?= $form->field($model, 'name_sick')->textInput(['maxlength' => true]) ?>

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
