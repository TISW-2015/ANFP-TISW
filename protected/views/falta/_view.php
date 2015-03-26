<?php
/* @var $this FaltaController */
/* @var $data Falta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAL_correl), array('view', 'id'=>$data->FAL_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_castigo')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_castigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_futCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_futCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_parCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAL_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_arbCorrel); ?>
	<br />


</div>