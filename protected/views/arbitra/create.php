<?php
/* @var $this ArbitraController */
/* @var $model Arbitra */

$this->breadcrumbs=array(
	'Arbitras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arbitra', 'url'=>array('index')),
	array('label'=>'Manage Arbitra', 'url'=>array('admin')),
);
?>

<h1>Create Arbitra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>