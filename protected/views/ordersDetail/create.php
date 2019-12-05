<?php
/* @var $this OrdersDetailController */
/* @var $model OrdersDetail */

$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrdersDetail', 'url'=>array('index')),
	array('label'=>'Manage OrdersDetail', 'url'=>array('admin')),
);
?>

<h1>Create OrdersDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>