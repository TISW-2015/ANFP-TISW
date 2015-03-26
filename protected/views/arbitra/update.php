<?php
/* @var $this ArbitraController */
/* @var $model Arbitra */

$this->breadcrumbs=array(
	'Arbitras'=>array('index'),
	$model->ARBI_correl=>array('view','id'=>$model->ARBI_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arbitra', 'url'=>array('index')),
	array('label'=>'Create Arbitra', 'url'=>array('create')),
	array('label'=>'View Arbitra', 'url'=>array('view', 'id'=>$model->ARBI_correl)),
	array('label'=>'Manage Arbitra', 'url'=>array('admin')),
);
?>

<h1>Update Arbitra <?php echo $model->ARBI_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>