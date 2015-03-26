<?php
/* @var $this GolController */
/* @var $data Gol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GOL_correl), array('view', 'id'=>$data->GOL_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->GOL_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL_asistente')); ?>:</b>
	<?php echo CHtml::encode($data->GOL_asistente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL_futCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->GOL_futCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->GOL_parCorrel); ?>
	<br />


</div>