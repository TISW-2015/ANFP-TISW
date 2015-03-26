<?php
/* @var $this FormacionController */
/* @var $data Formacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOR_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FOR_correl), array('view', 'id'=>$data->FOR_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOR_asignacion')); ?>:</b>
	<?php echo CHtml::encode($data->FOR_asignacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOR_equCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->FOR_equCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOR_parCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->FOR_parCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORMACIONcol')); ?>:</b>
	<?php echo CHtml::encode($data->FORMACIONcol); ?>
	<br />


</div>