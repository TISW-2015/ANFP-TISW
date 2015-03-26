<?php
/* @var $this SancionfutbolistaController */
/* @var $model Sancionfutbolista */

$this->breadcrumbs=array(
	'Sancionfutbolistas'=>array('index'),
	$model->SAN_FUT_correl,
);

$this->menu=array(
	array('label'=>'List Sancionfutbolista', 'url'=>array('index')),
	array('label'=>'Create Sancionfutbolista', 'url'=>array('create')),
	array('label'=>'Update Sancionfutbolista', 'url'=>array('update', 'id'=>$model->SAN_FUT_correl)),
	array('label'=>'Delete Sancionfutbolista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SAN_FUT_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sancionfutbolista', 'url'=>array('admin')),
);
?>

<h1>View Sancionfutbolista #<?php echo $model->SAN_FUT_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SAN_FUT_correl',
		'SAN_FUT_futCorrel',
		'SAN_FUT_arbCorrel',
		'SAN_FUT_fecha',
		'SAN_FUT_descripcion',
		'SAN_FUT_castigo',
		'SAN_FUT_partidoPerdido',
	),
)); ?>
