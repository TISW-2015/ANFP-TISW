<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Estadio', 'url'=>array('index')),
	array('label'=>'Agregar Estadio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estadio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estadios</h1>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'estadio-grid',
	'dataProvider'=>$model->search(),
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'filter'=>$model,
	'columns'=>array(
		//'EST_correl',
		'EST_nombre',
		'EST_capacidad',
		'EST_estado',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update} {delete} ',
		),
	),
)); ?>
