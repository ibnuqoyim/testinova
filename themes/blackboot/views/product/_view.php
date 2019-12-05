<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_price')); ?>:</b>
	<?php echo CHtml::encode($data->product_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_desc')); ?>:</b>
	<?php echo CHtml::encode($data->product_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_images')); ?>:</b>
	<?php echo CHtml::encode($data->product_images); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_stock')); ?>:</b>
	<?php echo CHtml::encode($data->product_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_date')); ?>:</b>
	<?php echo CHtml::encode($data->product_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	*/ ?>

</div>