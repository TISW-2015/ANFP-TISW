<?php
/* @var $this IsapreController */
/* @var $model Isapre */

$this->breadcrumbs=array(
	'Isapres'=>array('index'),
	$model->ISA_correl,
);

$this->menu=array(
	array('label'=>'List Isapre', 'url'=>array('index')),
	array('label'=>'Create Isapre', 'url'=>array('create')),
	array('label'=>'Update Isapre', 'url'=>array('update', 'id'=>$model->ISA_correl)),
	array('label'=>'Delete Isapre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ISA_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Isapre', 'url'=>array('admin')),
);
?>

<h1>View Isapre #<?php echo $model->ISA_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ISA_correl',
		'ISA_nombre',
		'ISA_montoPlan',
	),
)); ?>
