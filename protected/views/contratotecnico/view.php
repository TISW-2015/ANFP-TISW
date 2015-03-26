<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */

$this->breadcrumbs=array(
	'Contratotecnicos'=>array('index'),
	$model->CON_TEC_correl,
);

$this->menu=array(
	array('label'=>'List Contratotecnico', 'url'=>array('index')),
	array('label'=>'Create Contratotecnico', 'url'=>array('create')),
	array('label'=>'Update Contratotecnico', 'url'=>array('update', 'id'=>$model->CON_TEC_correl)),
	array('label'=>'Delete Contratotecnico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_TEC_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contratotecnico', 'url'=>array('admin')),
);
?>

<h1>View Contratotecnico #<?php echo $model->CON_TEC_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CON_TEC_correl',
		'CON_TEC_tecCorrel',
		'CON_TEC_equCorrel',
		'CON_TEC_agno',
		'CON_TEC_periodo',
		'CON_TEC_cargo',
	),
)); ?>
