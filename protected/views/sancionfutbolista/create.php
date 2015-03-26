<?php
/* @var $this SancionfutbolistaController */
/* @var $model Sancionfutbolista */

$this->breadcrumbs=array(
	'Sancionfutbolistas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sancionfutbolista', 'url'=>array('index')),
	array('label'=>'Manage Sancionfutbolista', 'url'=>array('admin')),
);
?>

<h1>Create Sancionfutbolista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>