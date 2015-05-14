<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */

$this->breadcrumbs=array(
	'Contratos Técnicos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Contratotecnico', 'url'=>array('index')),
	array('label'=>'Crear Contrato Técnico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contratotecnico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Contratos Técnicos</h1>



<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'contratotecnico-grid',
	'dataProvider'=>$model->search(),
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'filter'=>$model,
	'columns'=>array(
		//'CON_TEC_correl',
		'CON_TEC_tecCorrel',
		'CON_TEC_equCorrel',
		'CON_TEC_agno',
		'CON_TEC_periodo',
		'CON_TEC_cargo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
