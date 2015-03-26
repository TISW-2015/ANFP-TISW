<?php
/* @var $this SancionfutbolistaController */
/* @var $data Sancionfutbolista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SAN_FUT_correl), array('view', 'id'=>$data->SAN_FUT_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_futCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_futCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_arbCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_arbCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_castigo')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_castigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAN_FUT_partidoPerdido')); ?>:</b>
	<?php echo CHtml::encode($data->SAN_FUT_partidoPerdido); ?>
	<br />


</div>