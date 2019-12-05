<?php
/* @var $this OrdersDetailController */
/* @var $model OrdersDetail */

$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrdersDetail', 'url'=>array('index')),
	array('label'=>'Create OrdersDetail', 'url'=>array('create')),
	array('label'=>'Update OrdersDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrdersDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdersDetail', 'url'=>array('admin')),
);
?>

<h1>View OrdersDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_orders',
		'product_id',
		'jumlah',
	),
)); ?>
