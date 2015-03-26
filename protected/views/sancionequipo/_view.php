<?php
/* @var $this SancionequipoController */
/* @var $data Sancionequipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SAN_EQU_correl), array('view', 'id'=>$data->SAN_EQU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_motivo')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_castigoMonto')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_castigoMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_EQU_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_EQU_fecha); ?>
	<br />


</div>