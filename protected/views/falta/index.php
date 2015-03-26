<?php
/* @var $this FaltaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faltas',
);

$this->menu=array(
	array('label'=>'Create Falta', 'url'=>array('create')),
	array('label'=>'Manage Falta', 'url'=>array('admin')),
);
?>

<h1>Faltas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
