<?php
/* @var $this SalarioController */
/* @var $model Salario */

$this->breadcrumbs=array(
	'Salarios'=>array('index'),
	$model->SAL_correl=>array('view','id'=>$model->SAL_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salario', 'url'=>array('index')),
	array('label'=>'Create Salario', 'url'=>array('create')),
	array('label'=>'View Salario', 'url'=>array('view', 'id'=>$model->SAL_correl)),
	array('label'=>'Manage Salario', 'url'=>array('admin')),
);
?>

<h1>Update Salario <?php echo $model->SAL_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>