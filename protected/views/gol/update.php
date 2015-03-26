<?php
/* @var $this GolController */
/* @var $model Gol */

$this->breadcrumbs=array(
	'Gols'=>array('index'),
	$model->GOL_correl=>array('view','id'=>$model->GOL_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gol', 'url'=>array('index')),
	array('label'=>'Create Gol', 'url'=>array('create')),
	array('label'=>'View Gol', 'url'=>array('view', 'id'=>$model->GOL_correl)),
	array('label'=>'Manage Gol', 'url'=>array('admin')),
);
?>

<h1>Update Gol <?php echo $model->GOL_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>