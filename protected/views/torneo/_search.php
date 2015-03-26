<?php
/* @var $this TorneoController */
/* @var $model Torneo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TOR_correl'); ?>
		<?php echo $form->textField($model,'TOR_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_division'); ?>
		<?php echo $form->textField($model,'TOR_division',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_nombre'); ?>
		<?php echo $form->textField($model,'TOR_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_agno'); ?>
		<?php echo $form->textField($model,'TOR_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_periodo'); ?>
		<?php echo $form->textField($model,'TOR_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_premio'); ?>
		<?php echo $form->textField($model,'TOR_premio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOR_ganador'); ?>
		<?php echo $form->textField($model,'TOR_ganador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->