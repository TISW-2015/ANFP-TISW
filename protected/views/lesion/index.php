<?php
/* @var $this LesionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lesiones',
);

$this->menu=array(
	array('label'=>'Agregar Lesión', 'url'=>array('create')),
	array('label'=>'Buscar Lesión', 'url'=>array('admin')),
);
?>

<h1>Lesiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
