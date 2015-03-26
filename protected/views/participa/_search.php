<?php
/* @var $this ParticipaController */
/* @var $model Participa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PART_correl'); ?>
		<?php echo $form->textField($model,'PART_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_equCorrel'); ?>
		<?php echo $form->textField($model,'PART_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_parCorrel'); ?>
		<?php echo $form->textField($model,'PART_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_posicion'); ?>
		<?php echo $form->textField($model,'PART_posicion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_goles'); ?>
		<?php echo $form->textField($model,'PART_goles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_faltas'); ?>
		<?php echo $form->textField($model,'PART_faltas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_tarjetaAmarilla'); ?>
		<?php echo $form->textField($model,'PART_tarjetaAmarilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_tarjetaRoja'); ?>
		<?php echo $form->textField($model,'PART_tarjetaRoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_tiroLibre'); ?>
		<?php echo $form->textField($model,'PART_tiroLibre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_corner'); ?>
		<?php echo $form->textField($model,'PART_corner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_penal'); ?>
		<?php echo $form->textField($model,'PART_penal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PART_extranjero'); ?>
		<?php echo $form->textField($model,'PART_extranjero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->