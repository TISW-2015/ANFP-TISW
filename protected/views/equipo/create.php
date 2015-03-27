<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Registrar','Equipo') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>