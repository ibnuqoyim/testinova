<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_price'); ?>
		<?php echo $form->textField($model,'product_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_desc'); ?>
		<?php echo $form->textArea($model,'product_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_images'); ?>
		<?php echo $form->textArea($model,'product_images',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_stock'); ?>
		<?php echo $form->textField($model,'product_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_date'); ?>
		<?php echo $form->textField($model,'product_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->