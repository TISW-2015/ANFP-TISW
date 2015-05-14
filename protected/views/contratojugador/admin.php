<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratos Futbolistas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Crear Contrato Jugador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contratojugador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Contratos de Jugadores</h1>



<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'contratojugador-grid',
	'dataProvider'=>$model->search(),
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'filter'=>$model,
	'columns'=>array(
		//'CON_JUG_correl',
		'CON_JUG_equCorrel',
		'CON_JUG_agno',
		'CON_JUG_periodo',
		'CON_JUG_futCorrel',
		'CON_JUG_numero',
		/*
		'CON_JUG_amarilla',
		'CON_JUG_roja',
		'CON_JUG_goles',
		'CON_JUG_asistencia',
		'CON_JUG_falta',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
