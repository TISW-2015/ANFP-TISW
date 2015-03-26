<?php
/* @var $this SaludController */
/* @var $data Salud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SALU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SALU_correl), array('view', 'id'=>$data->SALU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SALU_porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->SALU_porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISAPRE_ISA_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ISAPRE_ISA_correl); ?>
	<br />


</div>