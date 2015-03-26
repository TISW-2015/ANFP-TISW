<?php
/* @var $this IsapreController */
/* @var $data Isapre */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISA_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ISA_correl), array('view', 'id'=>$data->ISA_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISA_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ISA_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISA_montoPlan')); ?>:</b>
	<?php echo CHtml::encode($data->ISA_montoPlan); ?>
	<br />


</div>