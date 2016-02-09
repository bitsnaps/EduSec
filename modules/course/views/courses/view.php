<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\course\models\Courses */

$this->title = $model->course_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('course', 'Course Management'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('course', 'Manage Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-search"></i> <?php echo Yii::t('course', 'View Course') ?></h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('course', 'Back'), ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('course', 'Update'), ['update', 'id' => $model->course_id], ['class' => 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('course', 'Delete'), ['delete', 'id' => $model->course_id], [
            'class' => 'btn btn-block btn-danger',
            'data' => [
                'confirm' => Yii::t('course', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> 
	</div>
  </div>
</div>

<div class="col-xs-12">
  <div class="box box-primary view-item">
   <div class="courses-view">
    <?= DetailView::widget([
        'model' => $model,
	'options'=>['class'=>'table  detail-view'],
        'attributes' => [
            'course_name',
            'course_code',
            'course_alias',
	    [
		'attribute' => 'created_at',
		'value' => Yii::$app->formatter->asDateTime($model->created_at),
	    ],
        [
		'attribute' => 'created_by',
		'value' => $model->createdBy->user_login_id,	    
		],
	    [
		'attribute' => 'updated_at',
		'value' => ($model->updated_at == null) ? " - ": Yii::$app->formatter->asDateTime($model->updated_at),
	    ],
	    [
		'attribute' => 'updated_by',
		'value' => ($model->updated_by == null) ? " - ":$model->updatedBy->user_login_id,
	    ],
        ],
    ]) ?>
   </div>
  </div>
</div>