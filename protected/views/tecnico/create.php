<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(
	'Tecnicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tecnico', 'url'=>array('index')),
	array('label'=>'Manage Tecnico', 'url'=>array('admin')),
);
?>

<h1>Create Tecnico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>