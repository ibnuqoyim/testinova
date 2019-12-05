<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_foto'); ?>
		<?php echo $form->textArea($model,'user_foto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_username'); ?>
		<?php echo $form->textField($model,'user_username',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'user_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->textField($model,'user_password',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_level'); ?>
		<?php echo $form->textField($model,'user_level',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'user_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_create_date'); ?>
		<?php echo $form->textField($model,'user_create_date'); ?>
		<?php echo $form->error($model,'user_create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_status'); ?>
		<?php echo $form->textField($model,'user_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->