<?php
/* @var $this ParticipaController */
/* @var $model Participa */

$this->breadcrumbs=array(
	'Participas'=>array('index'),
	$model->PART_correl=>array('view','id'=>$model->PART_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participa', 'url'=>array('index')),
	array('label'=>'Create Participa', 'url'=>array('create')),
	array('label'=>'View Participa', 'url'=>array('view', 'id'=>$model->PART_correl)),
	array('label'=>'Manage Participa', 'url'=>array('admin')),
);
?>

<h1>Update Participa <?php echo $model->PART_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>