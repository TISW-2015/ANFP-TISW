<?php
/* @var $this PosicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posicions',
);

$this->menu=array(
	array('label'=>'Create Posicion', 'url'=>array('create')),
	array('label'=>'Manage Posicion', 'url'=>array('admin')),
);
?>

<h1>Posicions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
