<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */

$this->breadcrumbs=array(
	'Sanciontecnicos'=>array('index'),
	$model->SAN_TEC_correl=>array('view','id'=>$model->SAN_TEC_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sanciontecnico', 'url'=>array('index')),
	array('label'=>'Create Sanciontecnico', 'url'=>array('create')),
	array('label'=>'View Sanciontecnico', 'url'=>array('view', 'id'=>$model->SAN_TEC_correl)),
	array('label'=>'Manage Sanciontecnico', 'url'=>array('admin')),
);
?>

<h1>Update Sanciontecnico <?php echo $model->SAN_TEC_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>