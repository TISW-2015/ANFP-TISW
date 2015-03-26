<?php
/* @var $this ContratotecnicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contratotecnicos',
);

$this->menu=array(
	array('label'=>'Create Contratotecnico', 'url'=>array('create')),
	array('label'=>'Manage Contratotecnico', 'url'=>array('admin')),
);
?>

<h1>Contratotecnicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
