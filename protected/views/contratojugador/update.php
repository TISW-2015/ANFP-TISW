<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratojugadors'=>array('index'),
	$model->CON_JUG_correl=>array('view','id'=>$model->CON_JUG_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Create Contratojugador', 'url'=>array('create')),
	array('label'=>'View Contratojugador', 'url'=>array('view', 'id'=>$model->CON_JUG_correl)),
	array('label'=>'Manage Contratojugador', 'url'=>array('admin')),
);
?>

<h1>Update Contratojugador <?php echo $model->CON_JUG_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>