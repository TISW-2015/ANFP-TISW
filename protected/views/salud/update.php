<?php
/* @var $this SaludController */
/* @var $model Salud */

$this->breadcrumbs=array(
	'Saluds'=>array('index'),
	$model->SALU_correl=>array('view','id'=>$model->SALU_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salud', 'url'=>array('index')),
	array('label'=>'Create Salud', 'url'=>array('create')),
	array('label'=>'View Salud', 'url'=>array('view', 'id'=>$model->SALU_correl)),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>Update Salud <?php echo $model->SALU_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>