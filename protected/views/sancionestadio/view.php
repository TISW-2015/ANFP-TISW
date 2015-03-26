<?php
/* @var $this SancionestadioController */
/* @var $model Sancionestadio */

$this->breadcrumbs=array(
	'Sancionestadios'=>array('index'),
	$model->SAN_EST_correl,
);

$this->menu=array(
	array('label'=>'List Sancionestadio', 'url'=>array('index')),
	array('label'=>'Create Sancionestadio', 'url'=>array('create')),
	array('label'=>'Update Sancionestadio', 'url'=>array('update', 'id'=>$model->SAN_EST_correl)),
	array('label'=>'Delete Sancionestadio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SAN_EST_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sancionestadio', 'url'=>array('admin')),
);
?>

<h1>View Sancionestadio #<?php echo $model->SAN_EST_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SAN_EST_correl',
		'SAN_EST_estCorrel',
		'SAN_EST_arbCorrel',
		'SAN_EST_fecha',
		'SAN_EST_castigo',
	),
)); ?>
