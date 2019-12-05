<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_foto'); ?>
		<?php echo $form->textArea($model,'user_foto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_username'); ?>
		<?php echo $form->textField($model,'user_username',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_level'); ?>
		<?php echo $form->textField($model,'user_level',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_create_date'); ?>
		<?php echo $form->textField($model,'user_create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->