<?php
/* @var $this SanciontecnicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sanciontecnicos',
);

$this->menu=array(
	array('label'=>'Create Sanciontecnico', 'url'=>array('create')),
	array('label'=>'Manage Sanciontecnico', 'url'=>array('admin')),
);
?>

<h1>Sanciontecnicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
