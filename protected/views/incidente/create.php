<?php
/* @var $this IncidenteController */
/* @var $model Incidente */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Incidente', 'url'=>array('index')),
	array('label'=>'Manage Incidente', 'url'=>array('admin')),
);
?>

<h1>Create Incidente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>