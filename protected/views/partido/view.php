<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('admin'),
	'Detalle'
);

$this->menu=array(
	array('label'=>'Actualizar Partido', 'url'=>array('update', 'id'=>$model->PAR_correl)),
	array('label'=>'Borrar Partido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PAR_correl),'confirm'=>'¿Esta seguro de eliminar Partido?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Partido '.$model->PAR_correl) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PAR_correl',
		'PAR_estCorrel',
		'PAR_programacion',
		'PAR_hora',
		'PAR_fecha',
		'PAR_asistencia',
		'PAR_recaudo',
		'PAR_estado',
		'PAR_tiempo',
	),
)); ?>
