<?php
/* @var $this JuegaController */
/* @var $data Juega */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUE_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JUE_correl), array('view', 'id'=>$data->JUE_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUE_futCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->JUE_futCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUE_forCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->JUE_forCorrel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUE_posCorrel')); ?>:</b>
	<?php echo CHtml::encode($data->JUE_posCorrel); ?>
	<br />


</div>