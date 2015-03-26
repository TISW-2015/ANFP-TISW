<?php
/* @var $this AfpController */
/* @var $data Afp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AFP_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AFP_correl), array('view', 'id'=>$data->AFP_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AFP_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->AFP_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AFP_porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->AFP_porcentaje); ?>
	<br />


</div>