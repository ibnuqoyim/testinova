<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php foreach ($model as $produk) { ?>

<div class="col-lg-6"> 
	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/product/<?php	echo $produk->product_images; ?>" alt="<?php	echo $produk->product_name; ?>">
	<?php	echo $produk->product_name; ?></div>

	<br>
	<?php
} ?>