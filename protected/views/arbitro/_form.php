<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arbitro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ARB_nombre'); ?>
		<?php echo $form->textField($model,'ARB_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARB_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARB_apellidoPat'); ?>
		<?php echo $form->textField($model,'ARB_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARB_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARB_apellidoMat'); ?>
		<?php echo $form->textField($model,'ARB_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARB_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARB_fechaNac'); ?>
		<?php echo $form->textField($model,'ARB_fechaNac'); ?>
		<?php echo $form->error($model,'ARB_fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARB_nacionalidad'); ?>
		<?php echo $form->textField($model,'ARB_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARB_nacionalidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->