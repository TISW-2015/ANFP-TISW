<?php
/* @var $this SaludController */
/* @var $model Salud */

$this->breadcrumbs=array(
	'Saluds'=>array('index'),
	$model->SALU_correl,
);

$this->menu=array(
	array('label'=>'List Salud', 'url'=>array('index')),
	array('label'=>'Create Salud', 'url'=>array('create')),
	array('label'=>'Update Salud', 'url'=>array('update', 'id'=>$model->SALU_correl)),
	array('label'=>'Delete Salud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SALU_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salud', 'url'=>array('admin')),
);
?>

<h1>View Salud #<?php echo $model->SALU_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SALU_correl',
		'SALU_porcentaje',
		'ISAPRE_ISA_correl',
	),
)); ?>
