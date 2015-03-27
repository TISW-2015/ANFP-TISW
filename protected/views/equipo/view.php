<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'=>array('admin'),
	$model->EQU_nombre,
);

$this->menu=array(
	array('label'=>'Actualizar Equipo', 'url'=>array('update', 'id'=>$model->EQU_correl)),
	array('label'=>'Borar Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EQU_correl),'confirm'=>'¿Seguro quiere borar este equipo?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Equipo '.$model->EQU_nombre) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'EQU_correl',
		'EQU_nombre',
		'EQU_presidente',
		'EQU_direccionClub',
		'EQU_sitio',
		'EQU_telefono',
		//'EQU_logo',
		array('name'=>"Division",
			'value'=>Division::model()->findByPk((Pertenece::model()->findByAttributes(array('PER_equCorrel'=>$model->EQU_correl))->PER_divCorrel))->DIV_nombre
			),
	),
)); ?>
