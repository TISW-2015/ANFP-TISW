<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesiones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	array('label'=>'Agregar Lesión', 'url'=>array('Agregar')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lesion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Lesiones</h3>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'lesion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'LES_correl',
		'LES_futCorrel',
		//array('name'=>'LES_futCorrel',
			//'value'=>'Lesion::model()->findByAttributes($data->LES_futCorrel)->FUT_nombre'),
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
