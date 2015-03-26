<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lesion', 'url'=>array('index')),
	array('label'=>'Manage Lesion', 'url'=>array('admin')),
);
?>

<h1>Create Lesion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>