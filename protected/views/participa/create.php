<?php
/* @var $this ParticipaController */
/* @var $model Participa */

$this->breadcrumbs=array(
	'Participas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Participa', 'url'=>array('index')),
	array('label'=>'Manage Participa', 'url'=>array('admin')),
);
?>

<h1>Create Participa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>