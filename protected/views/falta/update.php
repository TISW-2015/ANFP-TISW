<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->FAL_correl=>array('view','id'=>$model->FAL_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Falta', 'url'=>array('index')),
	array('label'=>'Create Falta', 'url'=>array('create')),
	array('label'=>'View Falta', 'url'=>array('view', 'id'=>$model->FAL_correl)),
	array('label'=>'Manage Falta', 'url'=>array('admin')),
);
?>

<h1>Update Falta <?php echo $model->FAL_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>