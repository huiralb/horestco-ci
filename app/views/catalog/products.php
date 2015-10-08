<?php 
if ( count($products) > 0 ):
	foreach ($products as $key => $product):
	?>
	<h1><a href="catalog/<?= $product->slug ?>"><?= $product->name ?></a></h1>
	<p><?= $product->sku?></p>
	<p><?= $product->description?></p>
	<p><?= $product->dimension?></p>
	<?php
		if ( count($product->images) > 0 ):
			foreach($product->images as $image){
				imageThumb(250, $image->name);
			}
	?>

	<?php else: ?>
		<p>Image Not Available</p>
	<?php endif ?>
	<hr>
	<?php 
	endforeach;
else: ?>
	<p>Empty record</p>
	<?php 
endif; 


?>