<?php
/* @var $this JuegaController */
/* @var $model Juega */

$this->breadcrumbs=array(
	'Juegas'=>array('index'),
	$model->JUE_correl,
);

$this->menu=array(
	array('label'=>'List Juega', 'url'=>array('index')),
	array('label'=>'Create Juega', 'url'=>array('create')),
	array('label'=>'Update Juega', 'url'=>array('update', 'id'=>$model->JUE_correl)),
	array('label'=>'Delete Juega', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->JUE_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Juega', 'url'=>array('admin')),
);
?>

<h1>View Juega #<?php echo $model->JUE_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'JUE_correl',
		'JUE_futCorrel',
		'JUE_forCorrel',
		'JUE_posCorrel',
	),
)); ?>
