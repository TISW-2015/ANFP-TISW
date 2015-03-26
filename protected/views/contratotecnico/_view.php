<?php
/* @var $this ContratotecnicoController */
/* @var $data Contratotecnico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON_TEC_correl), array('view', 'id'=>$data->CON_TEC_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_tecCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TEC_tecCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TEC_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_agno')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TEC_agno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TEC_periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TEC_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TEC_cargo); ?>
	<br />


</div>