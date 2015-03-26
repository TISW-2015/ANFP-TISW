<?php
/* @var $this PerteneceController */
/* @var $model Pertenece */

$this->breadcrumbs=array(
	'Perteneces'=>array('index'),
	$model->PER_correl=>array('view','id'=>$model->PER_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pertenece', 'url'=>array('index')),
	array('label'=>'Create Pertenece', 'url'=>array('create')),
	array('label'=>'View Pertenece', 'url'=>array('view', 'id'=>$model->PER_correl)),
	array('label'=>'Manage Pertenece', 'url'=>array('admin')),
);
?>

<h1>Update Pertenece <?php echo $model->PER_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>