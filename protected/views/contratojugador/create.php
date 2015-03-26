<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratojugadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Manage Contratojugador', 'url'=>array('admin')),
);
?>

<h1>Create Contratojugador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>