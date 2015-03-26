<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */

$this->breadcrumbs=array(
	'Sancionequipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sancionequipo', 'url'=>array('index')),
	array('label'=>'Manage Sancionequipo', 'url'=>array('admin')),
);
?>

<h1>Create Sancionequipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>