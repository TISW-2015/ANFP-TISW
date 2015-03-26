<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('index'),
	$model->PAR_correl,
);

$this->menu=array(
	array('label'=>'List Partido', 'url'=>array('index')),
	array('label'=>'Create Partido', 'url'=>array('create')),
	array('label'=>'Update Partido', 'url'=>array('update', 'id'=>$model->PAR_correl)),
	array('label'=>'Delete Partido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PAR_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>View Partido #<?php echo $model->PAR_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PAR_correl',
		'PAR_estCorrel',
		'PAR_programacion',
		'PAR_hora',
		'PAR_fecha',
		'PAR_asistencia',
		'PAR_recaudo',
		'PAR_estado',
		'PAR_tiempo',
	),
)); ?>
