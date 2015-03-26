<?php
/* @var $this SanciontecnicoController */
/* @var $data Sanciontecnico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SAN_TEC_correl), array('view', 'id'=>$data->SAN_TEC_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_tecCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_tecCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_castigo')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_castigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_partidoPerido')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_partidoPerido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_TEC_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_TEC_descripcion); ?>
	<br />


</div>