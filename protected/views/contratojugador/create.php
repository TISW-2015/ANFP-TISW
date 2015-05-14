<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratos Futbolistas'=>array('index'),
	'Registro',
);

$this->menu=array(
	//array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Registrar Contrato de Futbolista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>