<?php
/* @var $this ArbitroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arbitros',
);

$this->menu=array(
	array('label'=>'Create Arbitro', 'url'=>array('create')),
	array('label'=>'Manage Arbitro', 'url'=>array('admin')),
);
?>

<h1>Arbitros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
