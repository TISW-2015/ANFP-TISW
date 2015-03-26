<?php
/* @var $this TorneoController */
/* @var $data Torneo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TOR_correl), array('view', 'id'=>$data->TOR_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_division')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_division); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_agno')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_agno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_premio')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_premio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOR_ganador')); ?>:</b>
	<?php echo CHtml::encode($data->TOR_ganador); ?>
	<br />


</div>