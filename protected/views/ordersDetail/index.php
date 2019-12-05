<?php
/* @var $this OrdersDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders Details',
);

$this->menu=array(
	array('label'=>'Create OrdersDetail', 'url'=>array('create')),
	array('label'=>'Manage OrdersDetail', 'url'=>array('admin')),
);
?>

<h1>Orders Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
