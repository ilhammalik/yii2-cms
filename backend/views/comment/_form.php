<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'status')->textInput() ?>
	<?php
	echo $form->field($model, 'status')
        ->dropDownList(
            ['0'=>'Draft','1'=>'Publish'],           
            ['prompt'=>'']
        );
    ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 128]) ?>

    <?php // $form->field($model, 'post_id')->textInput() ?>

    <?php // $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
