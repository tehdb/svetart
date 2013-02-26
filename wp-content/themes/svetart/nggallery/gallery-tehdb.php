<?php 
/*
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
*/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
	<div class="tehdb-gallery">
		<div class="stage">
			<img src="<?= $images[0]->imageURL ?>" />
		</div>

		<ul class="thumbs">
		<?php foreach ($images as $image) : ?>
			<li>
				<img src="<?= $image->thumbURL; ?>" />
			</li>
		<?php endforeach; ?>
		</ul>
	</div>

	<pre>
		<?php var_dump( $images[0]) ?>
	</pre>

<?php endif; ?>