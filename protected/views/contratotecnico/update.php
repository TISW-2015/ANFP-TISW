<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */

$this->breadcrumbs=array(
	'Contratotecnicos'=>array('index'),
	$model->CON_TEC_correl=>array('view','id'=>$model->CON_TEC_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contratotecnico', 'url'=>array('index')),
	array('label'=>'Create Contratotecnico', 'url'=>array('create')),
	array('label'=>'View Contratotecnico', 'url'=>array('view', 'id'=>$model->CON_TEC_correl)),
	array('label'=>'Manage Contratotecnico', 'url'=>array('admin')),
);
?>

<h1>Update Contratotecnico <?php echo $model->CON_TEC_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>