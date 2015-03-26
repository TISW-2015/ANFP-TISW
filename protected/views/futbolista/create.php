<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Futbolista', 'url'=>array('index')),
	array('label'=>'Manage Futbolista', 'url'=>array('admin')),
);
?>

<h1>Create Futbolista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>