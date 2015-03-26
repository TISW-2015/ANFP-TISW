<?php
/* @var $this PosicionController */
/* @var $model Posicion */

$this->breadcrumbs=array(
	'Posicions'=>array('index'),
	$model->POS_correl,
);

$this->menu=array(
	array('label'=>'List Posicion', 'url'=>array('index')),
	array('label'=>'Create Posicion', 'url'=>array('create')),
	array('label'=>'Update Posicion', 'url'=>array('update', 'id'=>$model->POS_correl)),
	array('label'=>'Delete Posicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->POS_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posicion', 'url'=>array('admin')),
);
?>

<h1>View Posicion #<?php echo $model->POS_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'POS_correl',
		'POS_nombre',
		'POS_codigo',
	),
)); ?>
