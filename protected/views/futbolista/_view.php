<?php
/* @var $this FutbolistaController */
/* @var $data Futbolista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FUT_correl), array('view', 'id'=>$data->FUT_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_apellidoPat')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_apellidoPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_apellidoMat')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_apellidoMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_estado')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FUT_estadoCivil')); ?>:</b>
	<?php echo CHtml::encode($data->FUT_estadoCivil); ?>
	<br />

	*/ ?>

</div>