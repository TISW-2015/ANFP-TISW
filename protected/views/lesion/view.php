<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesions'=>array('index'),
	$model->LES_correl,
);

$this->menu=array(
	array('label'=>'List Lesion', 'url'=>array('index')),
	array('label'=>'Create Lesion', 'url'=>array('create')),
	array('label'=>'Update Lesion', 'url'=>array('update', 'id'=>$model->LES_correl)),
	array('label'=>'Delete Lesion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LES_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lesion', 'url'=>array('admin')),
);
?>

<h1>View Lesion #<?php echo $model->LES_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LES_correl',
		'LES_futCorrel',
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
	),
)); ?>
