<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Integras'=>array('index'),
	$model->INT_correl,
);

$this->menu=array(
	array('label'=>'List Integra', 'url'=>array('index')),
	array('label'=>'Create Integra', 'url'=>array('create')),
	array('label'=>'Update Integra', 'url'=>array('update', 'id'=>$model->INT_correl)),
	array('label'=>'Delete Integra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->INT_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Integra', 'url'=>array('admin')),
);
?>

<h1>View Integra #<?php echo $model->INT_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'INT_correl',
		'INT_torCorrel',
		'INT_equCorrel',
		'INT_puntaje',
		'INT_golesFavor',
		'INT_golesContra',
		'INT_golesDif',
		'INT_partidoGanado',
		'INT_partidoPerdido',
		'INT_partidoEmpatado',
		'INT_tarjetaRojas',
		'INT_tarjetaAmarilla',
	),
)); ?>
