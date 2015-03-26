<?php
/* @var $this PerteneceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perteneces',
);

$this->menu=array(
	array('label'=>'Create Pertenece', 'url'=>array('create')),
	array('label'=>'Manage Pertenece', 'url'=>array('admin')),
);
?>

<h1>Perteneces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
