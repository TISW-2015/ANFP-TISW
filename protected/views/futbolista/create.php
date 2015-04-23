<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('admin'),
	'Registro',
);

$this->menu=array(
	//array('label'=>'Lista de Futbolista', 'url'=>array('index')),
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<h3>Registrar Futbolista</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>