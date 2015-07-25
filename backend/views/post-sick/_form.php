<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\SpecialistSick;
use dosamigos\ckeditor\CKEditor;
use backend\models\Status;

/* @var $this yii\web\View */
/* @var $model backend\models\PostSick */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-sick-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id_sick')->dropDownList(
                    ArrayHelper::map(SpecialistSick::find()->all(), 'id_sick', 'name_sick'),
                        ['prompt'=>'Select Sick']
                        ) ?>

    <?= $form->field($model, 'name_post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'create_day')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>
    
    <?= $form->field($model, 'status')->dropDownList(
                    ArrayHelper::map(Status::find()->all(), 'id', 'name'),
                        []
                        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
