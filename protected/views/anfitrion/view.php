<?php
/* @var $this AnfitrionController */
/* @var $model Anfitrion */

$this->breadcrumbs=array(
	'Anfitrions'=>array('index'),
	$model->ANF_correl,
);

$this->menu=array(
	array('label'=>'List Anfitrion', 'url'=>array('index')),
	array('label'=>'Create Anfitrion', 'url'=>array('create')),
	array('label'=>'Update Anfitrion', 'url'=>array('update', 'id'=>$model->ANF_correl)),
	array('label'=>'Delete Anfitrion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ANF_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anfitrion', 'url'=>array('admin')),
);
?>

<h1>View Anfitrion #<?php echo $model->ANF_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ANF_correl',
		'ANF_equCorrel',
		'ANF_estCorrel',
		'ANF_prioridad',
		'ANF_agno',
		'ANF_periodo',
	),
)); ?>
