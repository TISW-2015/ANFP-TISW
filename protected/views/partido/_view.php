<?php
/* @var $this PartidoController */
/* @var $data Partido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PAR_correl), array('view', 'id'=>$data->PAR_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_estCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_estCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_programacion')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_programacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_hora')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_asistencia')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_asistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_recaudo')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_recaudo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_estado')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAR_tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->PAR_tiempo); ?>
	<br />

	*/ ?>

</div>