<?php
/* @var $this FormacionController */
/* @var $model Formacion */

$this->breadcrumbs=array(
	'Formacions'=>array('index'),
	$model->FOR_correl,
);

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'Update Formacion', 'url'=>array('update', 'id'=>$model->FOR_correl)),
	array('label'=>'Delete Formacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FOR_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>View Formacion #<?php echo $model->FOR_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FOR_correl',
		'FOR_asignacion',
		'FOR_equCorrel',
		'FOR_parCorrel',
		'FORMACIONcol',
	),
)); ?>
