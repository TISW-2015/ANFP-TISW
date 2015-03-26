<?php
/* @var $this EquipoController */
/* @var $data Equipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EQU_correl), array('view', 'id'=>$data->EQU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_presidente')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_presidente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_direccionClub')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_direccionClub); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_sitio')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_sitio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EQU_logo')); ?>:</b>
	<?php echo CHtml::encode($data->EQU_logo); ?>
	<br />


</div>