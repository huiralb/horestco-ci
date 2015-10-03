<?php 
if ( count($products) > 0 ):
	foreach ($products as $key => $product):
	?>
	<h1><a href="catalog/<?= $product->slug ?>"><?= $product->name ?></a></h1>
	<p><?= $product->sku?></p>
	<p><?= $product->description?></p>
	<p><?= $product->dimension?></p>
	<hr>
	<?php 
	endforeach;
else: ?>
	<p>Empty record</p>
	<?php 
endif ?>