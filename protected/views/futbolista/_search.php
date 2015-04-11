<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FUT_correl'); ?>
		<?php echo $form->textField($model,'FUT_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_nombre'); ?>
		<?php echo $form->textField($model,'FUT_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_apellidoPat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_apellidoMat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->textField($model,'FUT_fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_nacionalidad'); ?>
		<?php echo $form->textField($model,'FUT_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_estado'); ?>
		<?php echo $form->textField($model,'FUT_estado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FUT_estadoCivil'); ?>
		<?php echo $form->textField($model,'FUT_estadoCivil',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->