<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TEC_correl'); ?>
		<?php echo $form->textField($model,'TEC_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEC_nombre'); ?>
		<?php echo $form->textField($model,'TEC_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEC_apellidoPat'); ?>
		<?php echo $form->textField($model,'TEC_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEC_apellidoMat'); ?>
		<?php echo $form->textField($model,'TEC_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEC_fechaNac'); ?>
		<?php echo $form->textField($model,'TEC_fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEC_nacionalidad'); ?>
		<?php echo $form->textField($model,'TEC_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->