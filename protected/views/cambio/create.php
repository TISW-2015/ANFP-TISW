<?php
/* @var $this CambioController */
/* @var $model Cambio */

$this->breadcrumbs=array(
	'Cambios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cambio', 'url'=>array('index')),
	array('label'=>'Manage Cambio', 'url'=>array('admin')),
);
?>

<h1>Create Cambio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>