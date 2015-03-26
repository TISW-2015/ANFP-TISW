<?php
/* @var $this SancionestadioController */
/* @var $model Sancionestadio */

$this->breadcrumbs=array(
	'Sancionestadios'=>array('index'),
	$model->SAN_EST_correl=>array('view','id'=>$model->SAN_EST_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sancionestadio', 'url'=>array('index')),
	array('label'=>'Create Sancionestadio', 'url'=>array('create')),
	array('label'=>'View Sancionestadio', 'url'=>array('view', 'id'=>$model->SAN_EST_correl)),
	array('label'=>'Manage Sancionestadio', 'url'=>array('admin')),
);
?>

<h1>Update Sancionestadio <?php echo $model->SAN_EST_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>