<?php
/* @var $this IsapreController */
/* @var $model Isapre */

$this->breadcrumbs=array(
	'Isapres'=>array('index'),
	$model->ISA_correl=>array('view','id'=>$model->ISA_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Isapre', 'url'=>array('index')),
	array('label'=>'Create Isapre', 'url'=>array('create')),
	array('label'=>'View Isapre', 'url'=>array('view', 'id'=>$model->ISA_correl)),
	array('label'=>'Manage Isapre', 'url'=>array('admin')),
);
?>

<h1>Update Isapre <?php echo $model->ISA_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>