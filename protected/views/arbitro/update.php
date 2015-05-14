<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Árbitro'=>array('index'),
	$model->ARB_nombre." ".$model->ARB_apellidoPat=>array('admin','id'=>$model->ARB_correl),
	'Editar',
);

$this->menu=array(
	//array('label'=>'List Arbitro', 'url'=>array('index')),
	//array('label'=>'Create Arbitro', 'url'=>array('create')),
	//array('label'=>'Detalle Árbitro', 'url'=>array('view', 'id'=>$model->ARB_correl)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Editar Árbitro <?php echo $model->ARB_nombre." ".$model->ARB_apellidoPat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>