<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; // load classes
/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="post-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">

            <div class="block">
                <div class="block-title">
                </div>
                <div class="wp-posts-index">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => 128]) ?>
                    <?= $form->field($model, 'content')->textarea(['rows' => 6,'class'=>'form-control textareas']) ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-title">
                </div>
                <div class="wp-posts-index">
                    <?php // $form->field($model, 'category_id')->textInput() ?>
                    <?php
                        $dataCategory=ArrayHelper::map(\common\models\Category::find()->asArray()->all(), 'id', 'name');
                        echo $form->field($model, 'category_id')->dropDownList($dataCategory,
                                ['prompt'=>'-Choose a Category-'])
                    ?>

                    <?php // $form->field($model, 'status')->textInput() ?>
                    <?php
                        echo $form->field($model, 'status')
                            ->dropDownList(
                                        ['0'=>'Draft','1'=>'Publish'],
                                ['prompt'=>'']
                            );
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php //$form->field($model, 'user_id')->textInput() ?>
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
