<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	$model->ARB_correl=>array('view','id'=>$model->ARB_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arbitro', 'url'=>array('index')),
	array('label'=>'Create Arbitro', 'url'=>array('create')),
	array('label'=>'View Arbitro', 'url'=>array('view', 'id'=>$model->ARB_correl)),
	array('label'=>'Manage Arbitro', 'url'=>array('admin')),
);
?>

<h1>Update Arbitro <?php echo $model->ARB_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>