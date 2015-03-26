<?php
/* @var $this PosicionController */
/* @var $model Posicion */

$this->breadcrumbs=array(
	'Posicions'=>array('index'),
	$model->POS_correl=>array('view','id'=>$model->POS_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posicion', 'url'=>array('index')),
	array('label'=>'Create Posicion', 'url'=>array('create')),
	array('label'=>'View Posicion', 'url'=>array('view', 'id'=>$model->POS_correl)),
	array('label'=>'Manage Posicion', 'url'=>array('admin')),
);
?>

<h1>Update Posicion <?php echo $model->POS_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>