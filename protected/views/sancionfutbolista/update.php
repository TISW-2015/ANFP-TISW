<?php
/* @var $this SancionfutbolistaController */
/* @var $model Sancionfutbolista */

$this->breadcrumbs=array(
	'Sancionfutbolistas'=>array('index'),
	$model->SAN_FUT_correl=>array('view','id'=>$model->SAN_FUT_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sancionfutbolista', 'url'=>array('index')),
	array('label'=>'Create Sancionfutbolista', 'url'=>array('create')),
	array('label'=>'View Sancionfutbolista', 'url'=>array('view', 'id'=>$model->SAN_FUT_correl)),
	array('label'=>'Manage Sancionfutbolista', 'url'=>array('admin')),
);
?>

<h1>Update Sancionfutbolista <?php echo $model->SAN_FUT_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>