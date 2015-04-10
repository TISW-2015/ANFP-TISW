<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	$model->FUT_correl,
);

$this->menu=array(
	array('label'=>'Lista de Futbolista', 'url'=>array('index')),
	array('label'=>'Registro de Futbolista', 'url'=>array('create')),
	array('label'=>'Actualizar Futbolista', 'url'=>array('update', 'id'=>$model->FUT_correl)),
	array('label'=>'Eliminar Futbolista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FUT_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Futbolista', 'url'=>array('admin')),
);
?>

<h1>Detalle Futbolista <?php echo $model->FUT_nombre." ".$model->FUT_apellidoPat." ".$model->FUT_apellidoMat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'FUT_correl',
		'FUT_nombre',
		'FUT_apellidoPat',
		'FUT_apellidoMat',
		'FUT_fechaNacimiento',
		'FUT_nacionalidad',
		'FUT_estado',
		'FUT_estadoCivil',
	),
)); ?>
