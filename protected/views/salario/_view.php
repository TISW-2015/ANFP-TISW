<?php
/* @var $this SalarioController */
/* @var $data Salario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SAL_correl), array('view', 'id'=>$data->SAL_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_afpCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_afpCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_JUG_correl')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_JUG_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_TEC_correl')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_TEC_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_saluCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_saluCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_fechaPaga')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_fechaPaga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_monto')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_monto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_salud')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_salud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_prevision')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_prevision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAL_sueldoLiquido')); ?>:</b>
	<?php echo CHtml::encode($data->SAL_sueldoLiquido); ?>
	<br />

	*/ ?>

</div>