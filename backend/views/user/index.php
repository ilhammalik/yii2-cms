<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar User');
$this->params['breadcrumbs'][] = $this->title;
?>

          
   
<div class="user-index">

   
    <br/>
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
            </p>
   <br/>
   <br/>
<div class="block">
<div class="block-title">
<div class="block-options pull-left">
<?= Html::a(Yii::t('app', '<i class="fa fa-list"></i>'), ['index'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle'=>'tooltip', 'title'=>'','data-original-title'=>'Tambah User']) ?>
</div>
   <h6><?= Html::encode($this->title) ?></h6>

    
    <div class="block-options pull-right">
<?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i>'), ['create'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle'=>'tooltip', 'title'=>'','data-original-title'=>'Tambah User']) ?>
</div>
</div>
<div class="wp-posts-index">
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',

            [
            'header'=>'Status',
            'value'=>function ($data){
                return \common\models\User::NamaStatus($data->status);
            }
            
            ],   
           
            
                // 'created_at',
            // 'updated_at',

                [
                            'class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:169px; z-index:200;'],
                            'header' => 'Actions',
                            'template' => ' {update}{delete}',
                            'buttons' => [
                               'pass' => function ($url, $model) {
                                    return Html::a('<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span></button>', Yii::$app->urlManager->createUrl(['user/access','id' => $model->id]), [
                                                    'title' => Yii::t('yii', 'Edit'),
                                                  ]);},
                                'update' => function ($url, $model) {
                                    return Html::a('<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button> &nbsp;', Yii::$app->urlManager->createUrl(['user/update','id' => $model->id]), [
                                                    'title' => Yii::t('yii', 'Edit'),
                                                  ]);},
                                'delete' => function ($url, $model) {
                                    return Html::a('<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>', Yii::$app->urlManager->createUrl(['user/delete','id' => $model->id]), [
                                                    'title' => Yii::t('yii', 'Edit'),
                                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                                                                            'data-method' => 'post',
                                                  ]);},
                                    ],
                                ],
        ],
    ]); ?>
   

</div>
</div>
    

</div>

