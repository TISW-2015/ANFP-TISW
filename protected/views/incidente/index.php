<?php
/* @var $this IncidenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Incidentes',
);

$this->menu=array(
	array('label'=>'Create Incidente', 'url'=>array('create')),
	array('label'=>'Manage Incidente', 'url'=>array('admin')),
);
?>

<h1>Incidentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
