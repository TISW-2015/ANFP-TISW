<?php
/* @var $this ContratojugadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contratojugadors',
);

$this->menu=array(
	array('label'=>'Create Contratojugador', 'url'=>array('create')),
	array('label'=>'Manage Contratojugador', 'url'=>array('admin')),
);
?>

<h1>Contratojugadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
