<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'=>array('admin'),
	$model->EQU_nombre=>array('view','id'=>$model->EQU_correl),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Administrar equipos', 'url'=>array('admin')),
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->EQU_correl)),
);
?>

<?php echo BsHtml::pageHeader('Actualizar','Equipo'." ".$model->EQU_nombre) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>