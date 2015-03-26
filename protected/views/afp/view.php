<?php
/* @var $this AfpController */
/* @var $model Afp */

$this->breadcrumbs=array(
	'Afps'=>array('index'),
	$model->AFP_correl,
);

$this->menu=array(
	array('label'=>'List Afp', 'url'=>array('index')),
	array('label'=>'Create Afp', 'url'=>array('create')),
	array('label'=>'Update Afp', 'url'=>array('update', 'id'=>$model->AFP_correl)),
	array('label'=>'Delete Afp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AFP_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Afp', 'url'=>array('admin')),
);
?>

<h1>View Afp #<?php echo $model->AFP_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AFP_correl',
		'AFP_nombre',
		'AFP_porcentaje',
	),
)); ?>
