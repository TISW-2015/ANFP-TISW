<?php
/* @var $this PerteneceController */
/* @var $model Pertenece */

$this->breadcrumbs=array(
	'Perteneces'=>array('index'),
	$model->PER_correl,
);

$this->menu=array(
	array('label'=>'List Pertenece', 'url'=>array('index')),
	array('label'=>'Create Pertenece', 'url'=>array('create')),
	array('label'=>'Update Pertenece', 'url'=>array('update', 'id'=>$model->PER_correl)),
	array('label'=>'Delete Pertenece', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pertenece', 'url'=>array('admin')),
);
?>

<h1>View Pertenece #<?php echo $model->PER_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PER_correl',
		'PER_equCorrel',
		'PER_divCorrel',
		'PER_fecha',
	),
)); ?>
