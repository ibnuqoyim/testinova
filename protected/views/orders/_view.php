<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_orders')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_orders), array('view', 'id'=>$data->id_orders)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_petugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_order')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam_order')); ?>:</b>
	<?php echo CHtml::encode($data->jam_order); ?>
	<br />


</div>