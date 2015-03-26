<?php
/* @var $this IncidenteController */
/* @var $data Incidente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INC_correl), array('view', 'id'=>$data->INC_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->INC_parCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->INC_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->INC_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->INC_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INC_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->INC_fecha); ?>
	<br />


</div>