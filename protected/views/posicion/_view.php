<?php
/* @var $this PosicionController */
/* @var $data Posicion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('POS_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->POS_correl), array('view', 'id'=>$data->POS_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POS_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->POS_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POS_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->POS_codigo); ?>
	<br />


</div>