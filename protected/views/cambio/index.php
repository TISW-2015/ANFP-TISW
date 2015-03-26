<?php
/* @var $this CambioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cambios',
);

$this->menu=array(
	array('label'=>'Create Cambio', 'url'=>array('create')),
	array('label'=>'Manage Cambio', 'url'=>array('admin')),
);
?>

<h1>Cambios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
