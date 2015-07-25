<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Group;
use dosamigos\ckeditor\CKEditor;
use backend\models\Status;

/* @var $this yii\web\View */
/* @var $model backend\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'group_post')->dropDownList(
                    ArrayHelper::map(Group::find()->all(), 'id', 'name'),
                        ['prompt'=>'Select Group']
                        ) ?>

    <?= $form->field($model, 'name_post')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

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
