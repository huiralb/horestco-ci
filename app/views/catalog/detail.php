<h1><?= $product->name ?></h1>
<p><?= $product->description ?></p>

<?php foreach ($product->images as $key => $image):?>
<?php if($image->sort_order == 1): ?>
	<?php imageThumb($image->id, '', ''); ?>
<?php endif; ?>
	<?php imageThumb($image->id, 250, 188) ?>
<?php endforeach ?>