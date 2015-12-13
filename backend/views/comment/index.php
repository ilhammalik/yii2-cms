<?php

use yii\helpers\Html;
use yii\grid\GridView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">
<div class="block">
<div class="block-title">
<div class="block-options pull-left">
<?= Html::a(Yii::t('app', '<i class="fa fa-list"></i>'), ['index'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle'=>'tooltip', 'title'=>'','data-original-title'=>'Tambah User']) ?>
</div>
   <h6><?= Html::encode($this->title) ?></h6>

       
    <div class="block-options pull-right">
     <?php
        if ((Mimin::filterRoute($this->context->id.'/create'))){ ?>
<?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i>'), ['create'], ['class' => 'btn btn-alt btn-sm btn-default', 'data-toggle'=>'tooltip', 'title'=>'','data-original-title'=>'Tambah User']) ?>


<?php } ?>
</div>
</div>
<div class="wp-posts-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'content:ntext',
            'status',
            'create_time:datetime',
            'author',
            // 'email:email',
            // 'url:url',
            // 'post_id',

              [
          'class' => 'yii\grid\ActionColumn',
          'template' => Mimin::filterTemplateActionColumn(['update','delete','view'],$this->context->route),
      
        ]
        ],
    ]); ?>

</div>
</div>
</div>
