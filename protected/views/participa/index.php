<?php
/* @var $this ParticipaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participas',
);

$this->menu=array(
	array('label'=>'Create Participa', 'url'=>array('create')),
	array('label'=>'Manage Participa', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('','Fechas');?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
