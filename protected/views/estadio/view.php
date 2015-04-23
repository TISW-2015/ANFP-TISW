<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	$model->EST_nombre,
);

$this->menu=array(
	//array('label'=>'List Estadio', 'url'=>array('index')),
	//array('label'=>'Create Estadio', 'url'=>array('create')),
	array('label'=>'Editar Estadio', 'url'=>array('update', 'id'=>$model->EST_correl)),
	array('label'=>'Eliminar Estadio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EST_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estadio', 'url'=>array('admin')),
);
?>

<h1>Detalle Estadio <?php echo $model->EST_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'EST_correl',
		'EST_nombre',
		'EST_capacidad',
		'EST_estado',
	),
)); ?>
