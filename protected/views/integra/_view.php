<?php
/* @var $this IntegraController */
/* @var $data Integra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INT_correl), array('view', 'id'=>$data->INT_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_torCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->INT_torCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->INT_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_puntaje')); ?>:</b>
	<?php echo CHtml::encode($data->INT_puntaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_golesFavor')); ?>:</b>
	<?php echo CHtml::encode($data->INT_golesFavor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_golesContra')); ?>:</b>
	<?php echo CHtml::encode($data->INT_golesContra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_golesDif')); ?>:</b>
	<?php echo CHtml::encode($data->INT_golesDif); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_partidoGanado')); ?>:</b>
	<?php echo CHtml::encode($data->INT_partidoGanado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_partidoPerdido')); ?>:</b>
	<?php echo CHtml::encode($data->INT_partidoPerdido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_partidoEmpatado')); ?>:</b>
	<?php echo CHtml::encode($data->INT_partidoEmpatado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_tarjetaRojas')); ?>:</b>
	<?php echo CHtml::encode($data->INT_tarjetaRojas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INT_tarjetaAmarilla')); ?>:</b>
	<?php echo CHtml::encode($data->INT_tarjetaAmarilla); ?>
	<br />

	*/ ?>

</div>