<?php
/* @var $this OrdersDetailController */
/* @var $model OrdersDetail */

$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdersDetail', 'url'=>array('index')),
	array('label'=>'Create OrdersDetail', 'url'=>array('create')),
	array('label'=>'View OrdersDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrdersDetail', 'url'=>array('admin')),
);
?>

<h1>Update OrdersDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>