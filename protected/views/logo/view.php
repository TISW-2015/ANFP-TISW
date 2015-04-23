<?php
/* @var $this LogoController */
/* @var $model Logo */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	$model->LOG_correl,
);

$this->menu=array(
	array('label'=>'List Logo', 'url'=>array('index')),
	array('label'=>'Create Logo', 'url'=>array('create')),
	array('label'=>'Update Logo', 'url'=>array('update', 'id'=>$model->LOG_correl)),
	array('label'=>'Delete Logo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LOG_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Logo', 'url'=>array('admin')),
);
?>

<h1>View Logo #<?php echo $model->LOG_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LOG_correl',
		'LOG_equCorrel',
		'LOG_url',
		'LOG_nombre',
		'LOG_estado',
	),
)); ?>
