<?php
/* @var $this LogoController */
/* @var $data Logo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOG_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LOG_correl), array('view', 'id'=>$data->LOG_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOG_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->LOG_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOG_url')); ?>:</b>
	<?php echo CHtml::encode($data->LOG_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOG_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->LOG_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOG_estado')); ?>:</b>
	<?php echo CHtml::encode($data->LOG_estado); ?>
	<br />


</div>