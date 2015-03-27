<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Torneos'=>array('//torneo/admin','id'=>$model->INT_torCorrel),
	Torneo::model()->findByPk($model->INT_torCorrel)->TOR_nombre." ".Torneo::model()->findByPk($model->INT_torCorrel)->TOR_agno=>array('//torneo/view','id'=>$model->INT_torCorrel),
	'Tabla equipos'=>array('admin','id'=>$model->INT_torCorrel),
	Equipo::model()->findByPk($model->INT_equCorrel)->EQU_nombre,
);

$this->menu=array(
	array('label'=>'Actualizar tabla', 'url'=>array('update', 'id'=>$model->INT_correl)),
	array('label'=>'Volver', 'url'=>array('admin','id'=>$model->INT_torCorrel)),
);
?>
<?php echo BsHtml::pageHeader('Detalle','Tabla Equipo '." ".Equipo::model()->findByPk($model->INT_equCorrel)->EQU_nombre) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'INT_correl',
		//'INT_torCorrel',
		array('name'=>"Torneo",
			'value'=>Torneo::model()->findByPk($model->INT_torCorrel)->TOR_nombre." ".Torneo::model()->findByPk($model->INT_torCorrel)->TOR_agno),
		//'INT_equCorrel',
		array('name'=>"Equipo",
			'value'=>Equipo::model()->findByPk($model->INT_equCorrel)->EQU_nombre),
		'INT_puntaje',
		'INT_golesFavor',
		'INT_golesContra',
		'INT_golesDif',
		'INT_partidoGanado',
		'INT_partidoPerdido',
		'INT_partidoEmpatado',
		'INT_tarjetaRojas',
		'INT_tarjetaAmarilla',
	),
)); ?>
