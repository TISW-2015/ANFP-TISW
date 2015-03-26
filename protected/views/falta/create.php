<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Falta', 'url'=>array('index')),
	array('label'=>'Manage Falta', 'url'=>array('admin')),
);
?>

<h1>Create Falta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>