<?php
/* @var $this CartController */
/* @var $model Cart */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cart-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_session'); ?>
		<?php echo $form->textField($model,'cart_session',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'cart_session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_date'); ?>
		<?php echo $form->textField($model,'cart_date'); ?>
		<?php echo $form->error($model,'cart_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cart_qty'); ?>
		<?php echo $form->textField($model,'cart_qty'); ?>
		<?php echo $form->error($model,'cart_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->