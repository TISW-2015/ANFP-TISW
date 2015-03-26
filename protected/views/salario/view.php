<?php
/* @var $this SalarioController */
/* @var $model Salario */

$this->breadcrumbs=array(
	'Salarios'=>array('index'),
	$model->SAL_correl,
);

$this->menu=array(
	array('label'=>'List Salario', 'url'=>array('index')),
	array('label'=>'Create Salario', 'url'=>array('create')),
	array('label'=>'Update Salario', 'url'=>array('update', 'id'=>$model->SAL_correl)),
	array('label'=>'Delete Salario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SAL_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salario', 'url'=>array('admin')),
);
?>

<h1>View Salario #<?php echo $model->SAL_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SAL_correl',
		'SAL_afpCorrel',
		'SAL_JUG_correl',
		'SAL_TEC_correl',
		'SAL_saluCorrel',
		'SAL_fechaPaga',
		'SAL_monto',
		'SAL_salud',
		'SAL_prevision',
		'SAL_sueldoLiquido',
	),
)); ?>
