<?php
/* @var $this SalarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salarios',
);

$this->menu=array(
	array('label'=>'Create Salario', 'url'=>array('create')),
	array('label'=>'Manage Salario', 'url'=>array('admin')),
);
?>

<h1>Salarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
