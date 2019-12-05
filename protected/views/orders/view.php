<?php
/* @var $this OrdersController */
/* @var $model Orders */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_orders,
);

$this->menu=array(
	array('label'=>'List Orders', 'url'=>array('index')),
	array('label'=>'Create Orders', 'url'=>array('create')),
	array('label'=>'Update Orders', 'url'=>array('update', 'id'=>$model->id_orders)),
	array('label'=>'Delete Orders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_orders),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>

<h1>View Orders #<?php echo $model->id_orders; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_orders',
		'nama_petugas',
		'tgl_order',
		'jam_order',
	),
)); ?>
