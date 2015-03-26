<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Integras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Integra', 'url'=>array('index')),
	array('label'=>'Manage Integra', 'url'=>array('admin')),
);
?>

<h1>Create Integra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>