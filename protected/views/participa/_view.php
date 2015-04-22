<?php
/* @var $this ParticipaController */
/* @var $data Participa */
?>

<div class="view">
<div class="parent">
    <div class="left">
        <b><?php echo CHtml::encode($data->getAttributeLabel('PART_equCorrel')); ?>:</b>
		<?php echo CHtml::encode($data->PART_equCorrel)."<br>";
		var_dump($data->PART_equCorrel);?>
		<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('PART_posicion')); ?>:</b>
		<?php echo CHtml::encode($data->PART_posicion); ?>
		<br />
    </div>
    <div class="center">
        <b><?php echo CHtml::encode($data->getAttributeLabel('PART_goles')); ?>:</b>
		<?php echo CHtml::encode($data->PART_goles); ?>
		<br /><br /><br />
    </div>
    <div class="right">
        right<br /><br /><br />
    </div>
    <div style="clear:both;"></div>
</div>
</div>