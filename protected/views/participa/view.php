<?php
/* @var $this ParticipaController */
/* @var $model Participa */

$this->breadcrumbs=array(
	'Participas'=>array('index'),
	$model->PART_correl,
);

$this->menu=array(
	array('label'=>'List Participa', 'url'=>array('index')),
	array('label'=>'Create Participa', 'url'=>array('create')),
	array('label'=>'Update Participa', 'url'=>array('update', 'id'=>$model->PART_correl)),
	array('label'=>'Delete Participa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PART_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participa', 'url'=>array('admin')),
);
?>

<h1>View Participa #<?php echo $model->PART_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PART_correl',
		'PART_equCorrel',
		'PART_parCorrel',
		'PART_posicion',
		'PART_goles',
		'PART_faltas',
		'PART_tarjetaAmarilla',
		'PART_tarjetaRoja',
		'PART_tiroLibre',
		'PART_corner',
		'PART_penal',
		'PART_extranjero',
	),
)); ?>
