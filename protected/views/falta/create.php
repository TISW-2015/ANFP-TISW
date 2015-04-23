<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Agregar',
);

$this->menu=array(
	//array('label'=>'List Falta', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h3>Agregar Falta</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>