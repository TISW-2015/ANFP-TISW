<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	$model->ARB_correl,
);

$this->menu=array(
	//array('label'=>'List Arbitro', 'url'=>array('index')),
	//array('label'=>'Create Arbitro', 'url'=>array('create')),
	array('label'=>'Editar Árbitro', 'url'=>array('update', 'id'=>$model->ARB_correl)),
	array('label'=>'Eliminar Árbitro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARB_correl),'confirm'=>'¿Estás seguro de querer eliminar este árbitro?')),
	array('label'=>'Administrar Árbitro', 'url'=>array('admin')),
);
?>

<h3>Detalle Arbitro <?php echo $model->ARB_nombre." ".$model->ARB_apellidoPat; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'ARB_correl',
		'ARB_nombre',
		'ARB_apellidoPat',
		'ARB_apellidoMat',
		'ARB_fechaNac',
		'ARB_nacionalidad',
	),
)); ?>
