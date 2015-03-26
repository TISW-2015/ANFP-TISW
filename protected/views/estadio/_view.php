<?php
/* @var $this EstadioController */
/* @var $data Estadio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EST_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EST_correl), array('view', 'id'=>$data->EST_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EST_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->EST_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EST_capacidad')); ?>:</b>
	<?php echo CHtml::encode($data->EST_capacidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EST_estado')); ?>:</b>
	<?php echo CHtml::encode($data->EST_estado); ?>
	<br />


</div>