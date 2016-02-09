<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\City */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'City/Town List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city_name, 'url' => ['view', 'id' => $model->city_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> <?php echo Yii::t('app', 'Update City/Town') ?> </h3>
  </div>
  <div class="col-xs-4"></div>
    <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	
	</div>
    </div>
 </div>
  
   <div class="city-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

  </div>
