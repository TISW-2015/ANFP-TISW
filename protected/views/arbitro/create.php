<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	'Agregar',
);

$this->menu=array(
	//array('label'=>'List Arbitro', 'url'=>array('index')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h3>Agregar Árbitro</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>