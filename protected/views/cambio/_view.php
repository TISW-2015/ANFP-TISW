<?php
/* @var $this CambioController */
/* @var $data Cambio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAM_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CAM_correl), array('view', 'id'=>$data->CAM_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAM_partCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->CAM_partCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAM_jugEntra')); ?>:</b>
	<?php echo CHtml::encode($data->CAM_jugEntra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAM_jugSale')); ?>:</b>
	<?php echo CHtml::encode($data->CAM_jugSale); ?>
	<br />


</div>