<?php
/* @var $this ContratojugadorController */
/* @var $data Contratojugador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON_JUG_correl), array('view', 'id'=>$data->CON_JUG_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_agno')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_agno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_futCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_futCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_numero')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_amarilla')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_amarilla); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_roja')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_roja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_goles')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_goles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_asistencia')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_asistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_JUG_falta')); ?>:</b>
	<?php echo CHtml::encode($data->CON_JUG_falta); ?>
	<br />

	*/ ?>

</div>