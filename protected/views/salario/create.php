<?php
/* @var $this SalarioController */
/* @var $model Salario */

$this->breadcrumbs=array(
	'Salarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salario', 'url'=>array('index')),
	array('label'=>'Manage Salario', 'url'=>array('admin')),
);
?>

<h1>Create Salario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>