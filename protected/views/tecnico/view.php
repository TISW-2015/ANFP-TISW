<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(
	'Tecnicos'=>array('index'),
	$model->TEC_correl,
);

$this->menu=array(
	array('label'=>'List Tecnico', 'url'=>array('index')),
	array('label'=>'Create Tecnico', 'url'=>array('create')),
	array('label'=>'Update Tecnico', 'url'=>array('update', 'id'=>$model->TEC_correl)),
	array('label'=>'Delete Tecnico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TEC_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tecnico', 'url'=>array('admin')),
);
?>

<h1>View Tecnico #<?php echo $model->TEC_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TEC_correl',
		'TEC_nombre',
		'TEC_apellidoPat',
		'TEC_apellidoMat',
		'TEC_fechaNac',
		'TEC_nacionalidad',
	),
)); ?>
