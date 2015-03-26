<?php
/* @var $this SancionestadioController */
/* @var $data Sancionestadio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EST_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SAN_EST_correl), array('view', 'id'=>$data->SAN_EST_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EST_estCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EST_estCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EST_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EST_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EST_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EST_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EST_castigo')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EST_castigo); ?>
	<br />


</div>