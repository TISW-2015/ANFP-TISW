<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_correl'); ?>
		<?php echo $form->textField($model,'CON_JUG_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_equCorrel'); ?>
		<?php echo $form->textField($model,'CON_JUG_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_agno'); ?>
		<?php echo $form->textField($model,'CON_JUG_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_periodo'); ?>
		<?php echo $form->textField($model,'CON_JUG_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_futCorrel'); ?>
		<?php echo $form->textField($model,'CON_JUG_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_numero'); ?>
		<?php echo $form->textField($model,'CON_JUG_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_amarilla'); ?>
		<?php echo $form->textField($model,'CON_JUG_amarilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_roja'); ?>
		<?php echo $form->textField($model,'CON_JUG_roja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_goles'); ?>
		<?php echo $form->textField($model,'CON_JUG_goles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_asistencia'); ?>
		<?php echo $form->textField($model,'CON_JUG_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_JUG_falta'); ?>
		<?php echo $form->textField($model,'CON_JUG_falta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->