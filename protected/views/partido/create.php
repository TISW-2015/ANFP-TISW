<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Registrar','Partido') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>