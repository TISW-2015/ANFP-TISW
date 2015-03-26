<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	$model->ARB_correl,
);

$this->menu=array(
	array('label'=>'List Arbitro', 'url'=>array('index')),
	array('label'=>'Create Arbitro', 'url'=>array('create')),
	array('label'=>'Update Arbitro', 'url'=>array('update', 'id'=>$model->ARB_correl)),
	array('label'=>'Delete Arbitro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARB_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arbitro', 'url'=>array('admin')),
);
?>

<h1>View Arbitro #<?php echo $model->ARB_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARB_correl',
		'ARB_nombre',
		'ARB_apellidoPat',
		'ARB_apellidoMat',
		'ARB_fechaNac',
		'ARB_nacionalidad',
	),
)); ?>
