<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	'Registro',
);

$this->menu=array(
	//array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Registrar Estadio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>