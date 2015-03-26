<?php
/* @var $this ArbitroController */
/* @var $data Arbitro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARB_correl), array('view', 'id'=>$data->ARB_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ARB_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_apellidoPat')); ?>:</b>
	<?php echo CHtml::encode($data->ARB_apellidoPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_apellidoMat')); ?>:</b>
	<?php echo CHtml::encode($data->ARB_apellidoMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_fechaNac')); ?>:</b>
	<?php echo CHtml::encode($data->ARB_fechaNac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARB_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->ARB_nacionalidad); ?>
	<br />


</div>