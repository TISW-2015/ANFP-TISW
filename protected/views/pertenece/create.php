<?php
/* @var $this PerteneceController */
/* @var $model Pertenece */

$this->breadcrumbs=array(
	'Perteneces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pertenece', 'url'=>array('index')),
	array('label'=>'Manage Pertenece', 'url'=>array('admin')),
);
?>

<h1>Create Pertenece</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>