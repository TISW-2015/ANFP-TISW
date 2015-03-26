<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratojugadors'=>array('index'),
	$model->CON_JUG_correl,
);

$this->menu=array(
	array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Create Contratojugador', 'url'=>array('create')),
	array('label'=>'Update Contratojugador', 'url'=>array('update', 'id'=>$model->CON_JUG_correl)),
	array('label'=>'Delete Contratojugador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_JUG_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contratojugador', 'url'=>array('admin')),
);
?>

<h1>View Contratojugador #<?php echo $model->CON_JUG_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CON_JUG_correl',
		'CON_JUG_equCorrel',
		'CON_JUG_agno',
		'CON_JUG_periodo',
		'CON_JUG_futCorrel',
		'CON_JUG_numero',
		'CON_JUG_amarilla',
		'CON_JUG_roja',
		'CON_JUG_goles',
		'CON_JUG_asistencia',
		'CON_JUG_falta',
	),
)); ?>
