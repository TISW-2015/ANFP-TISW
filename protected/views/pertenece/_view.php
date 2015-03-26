<?php
/* @var $this PerteneceController */
/* @var $data Pertenece */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PER_correl), array('view', 'id'=>$data->PER_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->PER_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_divCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->PER_divCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->PER_fecha); ?>
	<br />


</div>