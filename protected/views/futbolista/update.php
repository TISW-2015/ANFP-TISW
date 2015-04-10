<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	$model->FUT_correl=>array('view','id'=>$model->FUT_correl),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Futbolista', 'url'=>array('index')),
	array('label'=>'Agregar Futbolista', 'url'=>array('create')),
	array('label'=>'Detalle Futbolista', 'url'=>array('view', 'id'=>$model->FUT_correl)),
	array('label'=>'Buscar Futbolista', 'url'=>array('admin')),
);
?>

<h1>Actualizar Futbolista <?php echo $model->FUT_nombre." ".$model->FUT_apellidoPat." ".$model->FUT_apellidoMat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>