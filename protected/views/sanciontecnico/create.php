<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */

$this->breadcrumbs=array(
	'Sanciontecnicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sanciontecnico', 'url'=>array('index')),
	array('label'=>'Manage Sanciontecnico', 'url'=>array('admin')),
);
?>

<h1>Create Sanciontecnico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>