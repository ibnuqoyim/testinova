<?php
/* @var $this CartController */
/* @var $data Cart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cart_id), array('view', 'id'=>$data->cart_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_session')); ?>:</b>
	<?php echo CHtml::encode($data->cart_session); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_date')); ?>:</b>
	<?php echo CHtml::encode($data->cart_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cart_qty')); ?>:</b>
	<?php echo CHtml::encode($data->cart_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />


</div>