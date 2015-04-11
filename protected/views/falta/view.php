<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->FAL_correl,
);

$this->menu=array(
	//array('label'=>'List Falta', 'url'=>array('index')),
	//array('label'=>'Create Falta', 'url'=>array('create')),
	array('label'=>'Actualizar Falta', 'url'=>array('update', 'id'=>$model->FAL_correl)),
	array('label'=>'Eliminar Falta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FAL_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Detalle Falta</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FAL_correl',
		'FAL_castigo',
		'FAL_minuto',
		'FAL_futCorrel',
		'FAL_parCorrel',
		'FAL_arbCorrel',
	),
)); ?>
