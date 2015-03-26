<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */

$this->breadcrumbs=array(
	'Sanciontecnicos'=>array('index'),
	$model->SAN_TEC_correl,
);

$this->menu=array(
	array('label'=>'List Sanciontecnico', 'url'=>array('index')),
	array('label'=>'Create Sanciontecnico', 'url'=>array('create')),
	array('label'=>'Update Sanciontecnico', 'url'=>array('update', 'id'=>$model->SAN_TEC_correl)),
	array('label'=>'Delete Sanciontecnico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SAN_TEC_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sanciontecnico', 'url'=>array('admin')),
);
?>

<h1>View Sanciontecnico #<?php echo $model->SAN_TEC_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SAN_TEC_correl',
		'SAN_TEC_arbCorrel',
		'SAN_TEC_tecCorrel',
		'SAN_TEC_fecha',
		'SAN_TEC_castigo',
		'SAN_TEC_partidoPerido',
		'SAN_TEC_descripcion',
	),
)); ?>
