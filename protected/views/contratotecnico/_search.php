<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_correl'); ?>
		<?php echo $form->textField($model,'CON_TEC_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_tecCorrel'); ?>
		<?php echo $form->textField($model,'CON_TEC_tecCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_equCorrel'); ?>
		<?php echo $form->textField($model,'CON_TEC_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_agno'); ?>
		<?php echo $form->textField($model,'CON_TEC_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_periodo'); ?>
		<?php echo $form->textField($model,'CON_TEC_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TEC_cargo'); ?>
		<?php echo $form->textField($model,'CON_TEC_cargo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->