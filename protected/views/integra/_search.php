<?php
/* @var $this IntegraController */
/* @var $model Integra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'INT_correl'); ?>
		<?php echo $form->textField($model,'INT_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_torCorrel'); ?>
		<?php echo $form->textField($model,'INT_torCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_equCorrel'); ?>
		<?php echo $form->textField($model,'INT_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_puntaje'); ?>
		<?php echo $form->textField($model,'INT_puntaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_golesFavor'); ?>
		<?php echo $form->textField($model,'INT_golesFavor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_golesContra'); ?>
		<?php echo $form->textField($model,'INT_golesContra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_golesDif'); ?>
		<?php echo $form->textField($model,'INT_golesDif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_partidoGanado'); ?>
		<?php echo $form->textField($model,'INT_partidoGanado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_partidoPerdido'); ?>
		<?php echo $form->textField($model,'INT_partidoPerdido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_partidoEmpatado'); ?>
		<?php echo $form->textField($model,'INT_partidoEmpatado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_tarjetaRojas'); ?>
		<?php echo $form->textField($model,'INT_tarjetaRojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INT_tarjetaAmarilla'); ?>
		<?php echo $form->textField($model,'INT_tarjetaAmarilla'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->