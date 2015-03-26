<?php
/* @var $this TecnicoController */
/* @var $data Tecnico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TEC_correl), array('view', 'id'=>$data->TEC_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->TEC_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_apellidoPat')); ?>:</b>
	<?php echo CHtml::encode($data->TEC_apellidoPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_apellidoMat')); ?>:</b>
	<?php echo CHtml::encode($data->TEC_apellidoMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_fechaNac')); ?>:</b>
	<?php echo CHtml::encode($data->TEC_fechaNac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEC_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->TEC_nacionalidad); ?>
	<br />


</div>