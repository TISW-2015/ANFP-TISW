<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	'Registro',
);

$this->menu=array(
	array('label'=>'Lista de Futbolista', 'url'=>array('index')),
	array('label'=>'Buscar Futbolista', 'url'=>array('admin')),
);
?>

<h1>Registro Futbolista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>