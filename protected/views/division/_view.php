<?php
/* @var $this DivisionController */
/* @var $data Division */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIV_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DIV_correl), array('view', 'id'=>$data->DIV_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIV_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->DIV_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIV_posicion')); ?>:</b>
	<?php echo CHtml::encode($data->DIV_posicion); ?>
	<br />


</div>