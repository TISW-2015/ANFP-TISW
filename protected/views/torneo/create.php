<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'=>array('Admin'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Registrar','Torneo') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>