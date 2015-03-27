<?php
/* @var $this SalarioController */
/* @var $model Salario */

$this->breadcrumbs=array(
	'Salarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salario', 'url'=>array('index')),
	array('label'=>'Create Salario', 'url'=>array('create')),
);
?>

<h1>Salarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'SAL_correl',
		//'SAL_JUG_correl',
		//'SAL_TEC_correl',
		'SAL_monto',
		'SAL_fechaPaga',
		'SAL_afpCorrel',
		'SAL_saluCorrel',
		'SAL_salud',
		'SAL_prevision',
		'SAL_sueldoLiquido',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
