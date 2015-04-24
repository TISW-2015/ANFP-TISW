<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(
	'Técnicos'=>array('index'),
	'Registro',
);

$this->menu=array(
	//array('label'=>'List Tecnico', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Registrar Técnico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>