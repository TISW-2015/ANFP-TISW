<?php
/* @var $this ArbitraController */
/* @var $data Arbitra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARBI_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARBI_correl), array('view', 'id'=>$data->ARBI_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARBI_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->ARBI_parCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARBI_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->ARBI_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARBI_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->ARBI_tipo); ?>
	<br />


</div>