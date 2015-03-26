<?php
/* @var $this IncidenteController */
/* @var $model Incidente */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	$model->INC_correl,
);

$this->menu=array(
	array('label'=>'List Incidente', 'url'=>array('index')),
	array('label'=>'Create Incidente', 'url'=>array('create')),
	array('label'=>'Update Incidente', 'url'=>array('update', 'id'=>$model->INC_correl)),
	array('label'=>'Delete Incidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->INC_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Incidente', 'url'=>array('admin')),
);
?>

<h1>View Incidente #<?php echo $model->INC_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'INC_correl',
		'INC_parCorrel',
		'INC_arbCorrel',
		'INC_descripcion',
		'INC_minuto',
		'INC_fecha',
	),
)); ?>
