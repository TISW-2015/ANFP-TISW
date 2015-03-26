<?php
/* @var $this EquipoController */
/* @var $model Equipo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EQU_correl'); ?>
		<?php echo $form->textField($model,'EQU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_nombre'); ?>
		<?php echo $form->textField($model,'EQU_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_presidente'); ?>
		<?php echo $form->textField($model,'EQU_presidente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_direccionClub'); ?>
		<?php echo $form->textField($model,'EQU_direccionClub',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_sitio'); ?>
		<?php echo $form->textField($model,'EQU_sitio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_telefono'); ?>
		<?php echo $form->textField($model,'EQU_telefono',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EQU_logo'); ?>
		<?php echo $form->textField($model,'EQU_logo',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->