<?php
/* @var $this FormacionController */
/* @var $model Formacion */

$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<h1>Create Formacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>