<?php
/* @var $this ArbitraController */
/* @var $model Arbitra */

$this->breadcrumbs=array(
	'Arbitras'=>array('index'),
	$model->ARBI_correl,
);

$this->menu=array(
	array('label'=>'List Arbitra', 'url'=>array('index')),
	array('label'=>'Create Arbitra', 'url'=>array('create')),
	array('label'=>'Update Arbitra', 'url'=>array('update', 'id'=>$model->ARBI_correl)),
	array('label'=>'Delete Arbitra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARBI_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arbitra', 'url'=>array('admin')),
);
?>

<h1>View Arbitra #<?php echo $model->ARBI_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARBI_correl',
		'ARBI_parCorrel',
		'ARBI_arbCorrel',
		'ARBI_tipo',
	),
)); ?>
