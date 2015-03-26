<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */

$this->breadcrumbs=array(
	'Sancionequipos'=>array('index'),
	$model->SAN_EQU_correl,
);

$this->menu=array(
	array('label'=>'List Sancionequipo', 'url'=>array('index')),
	array('label'=>'Create Sancionequipo', 'url'=>array('create')),
	array('label'=>'Update Sancionequipo', 'url'=>array('update', 'id'=>$model->SAN_EQU_correl)),
	array('label'=>'Delete Sancionequipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SAN_EQU_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sancionequipo', 'url'=>array('admin')),
);
?>

<h1>View Sancionequipo #<?php echo $model->SAN_EQU_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SAN_EQU_correl',
		'SAN_EQU_equCorrel',
		'SAN_EQU_arbCorrel',
		'SAN_EQU_motivo',
		'SAN_EQU_descripcion',
		'SAN_EQU_castigoMonto',
		'SAN_EQU_fecha',
	),
)); ?>
