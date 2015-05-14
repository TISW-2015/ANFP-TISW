<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */

$this->breadcrumbs=array(
	'Contratos Técnicos'=>array('index'),
	'Registro',
);

$this->menu=array(
	//array('label'=>'List Contratotecnico', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Registrar Contrato de Técnico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>