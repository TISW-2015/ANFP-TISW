<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'=>array('index'),
	$model->TOR_correl,
);

$this->menu=array(
	array('label'=>'List Torneo', 'url'=>array('index')),
	array('label'=>'Create Torneo', 'url'=>array('create')),
	array('label'=>'Update Torneo', 'url'=>array('update', 'id'=>$model->TOR_correl)),
	array('label'=>'Delete Torneo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TOR_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Torneo', 'url'=>array('admin')),
);
?>

<h1>View Torneo #<?php echo $model->TOR_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TOR_correl',
		'TOR_division',
		'TOR_nombre',
		'TOR_agno',
		'TOR_periodo',
		'TOR_premio',
		'TOR_ganador',
	),
)); ?>
