<?php
/* @var $this LesionController */
/* @var $data Lesion */
?>

<div class="view">

 	<!-- <b><?php //echo CHtml::encode($data->getAttributeLabel('LES_correl')); ?></b>
	<?php //echo CHtml::link(CHtml::encode($data->LES_correl), array('view', 'id'=>$data->LES_correl)); ?>
	<br /> -->

	<b><?php //echo CHtml::encode($data->getAttributeLabel('LES_futCorrel')); ?></b>
	<?php //echo CHtml::encode($data->LES_futCorrel); ?>
	<br />  

	<b><?php echo CHtml::encode($data->getAttributeLabel('LES_glosa')); ?>:</b>
	<?php echo CHtml::encode($data->LES_glosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LES_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->LES_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LES_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->LES_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LES_tiempoReposo')); ?>:</b>
	<?php echo CHtml::encode($data->LES_tiempoReposo); ?>
	<br />


</div>