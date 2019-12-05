<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_orders'); ?>
		<?php echo $form->textField($model,'id_orders'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_order'); ?>
		<?php echo $form->textField($model,'tgl_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam_order'); ?>
		<?php echo $form->textField($model,'jam_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->