<?php 

foreach ($products as $key => $product):
?>
<h1><?= $product->title ?></h1>
<p><?= $product->status?></p>
<p><?= $product->description?></p>
<hr>
<?php endforeach ?>