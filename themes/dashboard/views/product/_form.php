<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_price'); ?>
		<?php echo $form->textField($model,'product_price'); ?>
		<?php echo $form->error($model,'product_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_desc'); ?>
		<?php echo $form->textArea($model,'product_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'product_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_images'); ?>
		<?php echo $form->textArea($model,'product_images',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'product_images'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_stock'); ?>
		<?php echo $form->textField($model,'product_stock'); ?>
		<?php echo $form->error($model,'product_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_date'); ?>
		<?php echo $form->textField($model,'product_date'); ?>
		<?php echo $form->error($model,'product_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->