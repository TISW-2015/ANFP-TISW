<?php
/* @var $this JuegaController */
/* @var $model Juega */

$this->breadcrumbs=array(
	'Juegas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Juega', 'url'=>array('index')),
	array('label'=>'Manage Juega', 'url'=>array('admin')),
);
?>

<h1>Create Juega</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>