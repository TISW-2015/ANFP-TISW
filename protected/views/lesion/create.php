<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesiones'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	array('label'=>'Buscar Lesión', 'url'=>array('admin')),
);
?>

<h1>Agregar Lesión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>