<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USU_correl), array('view', 'id'=>$data->USU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_role')); ?>:</b>
	<?php echo CHtml::encode($data->USU_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->USU_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_clave')); ?>:</b>
	<?php echo CHtml::encode($data->USU_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_email')); ?>:</b>
	<?php echo CHtml::encode($data->USU_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->USU_telefono); ?>
	<br />


</div>