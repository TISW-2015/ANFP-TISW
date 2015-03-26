<?php
/* @var $this JuegaController */
/* @var $model Juega */

$this->breadcrumbs=array(
	'Juegas'=>array('index'),
	$model->JUE_correl=>array('view','id'=>$model->JUE_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Juega', 'url'=>array('index')),
	array('label'=>'Create Juega', 'url'=>array('create')),
	array('label'=>'View Juega', 'url'=>array('view', 'id'=>$model->JUE_correl)),
	array('label'=>'Manage Juega', 'url'=>array('admin')),
);
?>

<h1>Update Juega <?php echo $model->JUE_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>