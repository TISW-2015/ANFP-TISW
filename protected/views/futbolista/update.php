<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	$model->FUT_correl=>array('view','id'=>$model->FUT_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Futbolista', 'url'=>array('index')),
	array('label'=>'Create Futbolista', 'url'=>array('create')),
	array('label'=>'View Futbolista', 'url'=>array('view', 'id'=>$model->FUT_correl)),
	array('label'=>'Manage Futbolista', 'url'=>array('admin')),
);
?>

<h1>Update Futbolista <?php echo $model->FUT_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>