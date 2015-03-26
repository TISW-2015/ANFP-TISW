<?php
/* @var $this FormacionController */
/* @var $model Formacion */

$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	$model->FOR_correl=>array('view','id'=>$model->FOR_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'View Formacion', 'url'=>array('view', 'id'=>$model->FOR_correl)),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>Update Formacion <?php echo $model->FOR_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>