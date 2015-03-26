<?php
/* @var $this AnfitrionController */
/* @var $model Anfitrion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ANF_correl'); ?>
		<?php echo $form->textField($model,'ANF_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANF_equCorrel'); ?>
		<?php echo $form->textField($model,'ANF_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANF_estCorrel'); ?>
		<?php echo $form->textField($model,'ANF_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANF_prioridad'); ?>
		<?php echo $form->textField($model,'ANF_prioridad',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANF_agno'); ?>
		<?php echo $form->textField($model,'ANF_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANF_periodo'); ?>
		<?php echo $form->textField($model,'ANF_periodo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->