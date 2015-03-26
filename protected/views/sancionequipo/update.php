<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */

$this->breadcrumbs=array(
	'Sancionequipos'=>array('index'),
	$model->SAN_EQU_correl=>array('view','id'=>$model->SAN_EQU_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sancionequipo', 'url'=>array('index')),
	array('label'=>'Create Sancionequipo', 'url'=>array('create')),
	array('label'=>'View Sancionequipo', 'url'=>array('view', 'id'=>$model->SAN_EQU_correl)),
	array('label'=>'Manage Sancionequipo', 'url'=>array('admin')),
);
?>

<h1>Update Sancionequipo <?php echo $model->SAN_EQU_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>