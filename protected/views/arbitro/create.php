<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arbitro', 'url'=>array('index')),
	array('label'=>'Manage Arbitro', 'url'=>array('admin')),
);
?>

<h1>Create Arbitro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>