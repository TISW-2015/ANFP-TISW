<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */

$this->breadcrumbs=array(
	'Contratotecnicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contratotecnico', 'url'=>array('index')),
	array('label'=>'Manage Contratotecnico', 'url'=>array('admin')),
);
?>

<h1>Create Contratotecnico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>