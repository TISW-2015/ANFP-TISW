<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'futbolista-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_nombre'); ?>
		<?php echo $form->textField($model,'FUT_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoPat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoMat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->textField($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->error($model,'FUT_fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_nacionalidad'); ?>
		<?php echo $form->textField($model,'FUT_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_estado'); ?>
		<?php echo $form->textField($model,'FUT_estado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FUT_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_estadoCivil'); ?>
		<?php echo $form->textField($model,'FUT_estadoCivil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FUT_estadoCivil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->