<?php
/* @var $this ParticipaController */
/* @var $data Participa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PART_correl), array('view', 'id'=>$data->PART_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->PART_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->PART_parCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_posicion')); ?>:</b>
	<?php echo CHtml::encode($data->PART_posicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_goles')); ?>:</b>
	<?php echo CHtml::encode($data->PART_goles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_faltas')); ?>:</b>
	<?php echo CHtml::encode($data->PART_faltas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_tarjetaAmarilla')); ?>:</b>
	<?php echo CHtml::encode($data->PART_tarjetaAmarilla); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_tarjetaRoja')); ?>:</b>
	<?php echo CHtml::encode($data->PART_tarjetaRoja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_tiroLibre')); ?>:</b>
	<?php echo CHtml::encode($data->PART_tiroLibre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_corner')); ?>:</b>
	<?php echo CHtml::encode($data->PART_corner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_penal')); ?>:</b>
	<?php echo CHtml::encode($data->PART_penal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PART_extranjero')); ?>:</b>
	<?php echo CHtml::encode($data->PART_extranjero); ?>
	<br />

	*/ ?>

</div>