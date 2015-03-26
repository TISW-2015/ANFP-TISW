<?php
/* @var $this SancionestadioController */
/* @var $model Sancionestadio */

$this->breadcrumbs=array(
	'Sancionestadios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sancionestadio', 'url'=>array('index')),
	array('label'=>'Manage Sancionestadio', 'url'=>array('admin')),
);
?>

<h1>Create Sancionestadio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>