<?php
/* @var $this CambioController */
/* @var $model Cambio */

$this->breadcrumbs=array(
	'Cambios'=>array('index'),
	$model->CAM_correl=>array('view','id'=>$model->CAM_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cambio', 'url'=>array('index')),
	array('label'=>'Create Cambio', 'url'=>array('create')),
	array('label'=>'View Cambio', 'url'=>array('view', 'id'=>$model->CAM_correl)),
	array('label'=>'Manage Cambio', 'url'=>array('admin')),
);
?>

<h1>Update Cambio <?php echo $model->CAM_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>