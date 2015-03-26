<?php
/* @var $this AnfitrionController */
/* @var $model Anfitrion */

$this->breadcrumbs=array(
	'Anfitrions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anfitrion', 'url'=>array('index')),
	array('label'=>'Manage Anfitrion', 'url'=>array('admin')),
);
?>

<h1>Create Anfitrion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>