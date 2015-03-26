<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Integras'=>array('index'),
	$model->INT_correl=>array('view','id'=>$model->INT_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Integra', 'url'=>array('index')),
	array('label'=>'Create Integra', 'url'=>array('create')),
	array('label'=>'View Integra', 'url'=>array('view', 'id'=>$model->INT_correl)),
	array('label'=>'Manage Integra', 'url'=>array('admin')),
);
?>

<h1>Update Integra <?php echo $model->INT_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>