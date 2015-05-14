<?php
/* @var $this EstadioController */
/* @var $model Estadio */

$this->breadcrumbs=array(
	'Estadios'=>array('index'),
	$model->EST_correl=>array('view','id'=>$model->EST_nombre),
	'Editar',
);

$this->menu=array(
	//array('label'=>'List Estadio', 'url'=>array('index')),
	//array('label'=>'Create Estadio', 'url'=>array('create')),
	//array('label'=>'Detalle Estadio', 'url'=>array('view', 'id'=>$model->EST_correl)),
	array('label'=>'Administrar Estadio', 'url'=>array('admin')),
);
?>

<h1>Editar Estadio <?php echo $model->EST_nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>