<?php
/* @var $this PosicionController */
/* @var $model Posicion */

$this->breadcrumbs=array(
	'Posicions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Posicion', 'url'=>array('index')),
	array('label'=>'Manage Posicion', 'url'=>array('admin')),
);
?>

<h1>Create Posicion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>