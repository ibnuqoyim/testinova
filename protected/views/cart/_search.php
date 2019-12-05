<?php
/* @var $this CartController */
/* @var $model Cart */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cart_id'); ?>
		<?php echo $form->textField($model,'cart_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_session'); ?>
		<?php echo $form->textField($model,'cart_session',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_date'); ?>
		<?php echo $form->textField($model,'cart_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cart_qty'); ?>
		<?php echo $form->textField($model,'cart_qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->