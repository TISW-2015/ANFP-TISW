<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	$model->EST_correl,
);

$this->menu=array(
	array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Create Estadio', 'url'=>array('create')),
	array('label'=>'Update Estadio', 'url'=>array('update', 'id'=>$model->EST_correl)),
	array('label'=>'Delete Estadio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EST_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadio', 'url'=>array('admin')),
);
?>

<h1>View Estadio #<?php echo $model->EST_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EST_correl',
		'EST_nombre',
		'EST_capacidad',
		'EST_estado',
	),
)); ?>
