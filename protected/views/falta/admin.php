<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Falta', 'url'=>array('index')),
	array('label'=>'Agregar Falta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#falta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Faltas</h3>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'falta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'FAL_correl',
		'FAL_castigo',
		'FAL_minuto',
		'FAL_futCorrel',
		'FAL_parCorrel',
		'FAL_arbCorrel',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
