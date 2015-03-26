<?php
/* @var $this CambioController */
/* @var $model Cambio */

$this->breadcrumbs=array(
	'Cambios'=>array('index'),
	$model->CAM_correl,
);

$this->menu=array(
	array('label'=>'List Cambio', 'url'=>array('index')),
	array('label'=>'Create Cambio', 'url'=>array('create')),
	array('label'=>'Update Cambio', 'url'=>array('update', 'id'=>$model->CAM_correl)),
	array('label'=>'Delete Cambio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CAM_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cambio', 'url'=>array('admin')),
);
?>

<h1>View Cambio #<?php echo $model->CAM_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CAM_correl',
		'CAM_partCorrel',
		'CAM_jugEntra',
		'CAM_jugSale',
	),
)); ?>
