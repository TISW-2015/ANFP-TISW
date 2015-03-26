<?php
/* @var $this AnfitrionController */
/* @var $data Anfitrion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ANF_correl), array('view', 'id'=>$data->ANF_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->ANF_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_estCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->ANF_estCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->ANF_prioridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_agno')); ?>:</b>
	<?php echo CHtml::encode($data->ANF_agno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANF_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->ANF_periodo); ?>
	<br />


</div>