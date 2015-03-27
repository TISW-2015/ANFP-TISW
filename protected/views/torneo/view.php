<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'=>array('admin'),
	$model->TOR_nombre." ".$model->TOR_agno,
);

$this->menu=array(
	array('label'=>'Actualizar Torneo', 'url'=>array('update', 'id'=>$model->TOR_correl)),
	array('label'=>'Borrar Torneo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TOR_correl),'confirm'=>'¿Esta seguro de eliminar torneo?')),
	array('label'=>'Ver Tabla', 'url'=>array('//Integra/admin', 'id'=>$model->TOR_correl)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Detalle','Torneo '.$model->TOR_nombre) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'TOR_correl',
		'TOR_nombre',
		'TOR_division',
		'TOR_agno',
		'TOR_periodo',
		'TOR_premio',
		'TOR_ganador',
	),
)); ?>
