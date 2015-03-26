<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'=>array('index'),
	$model->EQU_correl,
);

$this->menu=array(
	array('label'=>'List Equipo', 'url'=>array('index')),
	array('label'=>'Create Equipo', 'url'=>array('create')),
	array('label'=>'Update Equipo', 'url'=>array('update', 'id'=>$model->EQU_correl)),
	array('label'=>'Delete Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EQU_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipo', 'url'=>array('admin')),
);
?>

<h1>View Equipo #<?php echo $model->EQU_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EQU_correl',
		'EQU_nombre',
		'EQU_presidente',
		'EQU_direccionClub',
		'EQU_sitio',
		'EQU_telefono',
		'EQU_logo',
	),
)); ?>
