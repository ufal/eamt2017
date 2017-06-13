<?php
$title = "Gallery | EAMT 2017";
include("header.html");
?>

<div class="column">
<header>
<h1>Gallery</h1>
<h2>EAMT 2017: The 20th Annual Conference of the European Association for Machine Translation</h2>
<p>Prague, Czech Republic
<br>May 29 to 31, 2017
<br><a href="https://ufal.mff.cuni.cz/eamt2017/">https://ufal.mff.cuni.cz/eamt2017/</a></p>
</header>
</div>
<div class="column">
	<p><a href="https://goo.gl/photos/Ve4gUeCuKVMqAhmn9" target="_blank">Videos from best thesis and papers awards</a> thanks to Eleftherios Avramidis.</p>
</div>
<div class="column gallery">
	<?php 
	$photosDirectory = "../eamt2017-photos";
	$thumbnailsDirectory = "../eamt2017-photos/thumbnails";

	$thumbnail_height = 192;

	$photos = array_diff(scandir($photosDirectory), array('..', '.'));

	if(!is_dir($thumbnailsDirectory))
		mkdir($thumbnailsDirectory);

	foreach ($photos as $photo) {
		$photoSrc = $photosDirectory . "/" . $photo;
		$thumbSrc = $thumbnailsDirectory . "/" . $photo;
		if(is_dir($photoSrc))
			continue;

		if(!is_file($thumbSrc)){
			// https://davidwalsh.name/create-image-thumbnail-php
			/* read the source image */
			$source_image = imagecreatefromjpeg($photoSrc);
			$width = imagesx($source_image);
			$height = imagesy($source_image);
			
			/* find the "desired height" of this thumbnail, relative to the desired width  */
			$thumbnail_width = floor($width * ($thumbnail_height / $height));
			// $thumbnail_height = floor($height * ($thumbnail_width / $width));
			
			/* create a new, "virtual" image */
			$virtual_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			
			/* copy source image at a resized size */
			imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $width, $height);
			
			/* create the physical thumbnail image to its destination */
			imagejpeg($virtual_image, $thumbSrc);
		}

		?><a href="photos/<?=$photo?>" class="image-holder" target="_blank"><img src="photos/thumbnails/<?=$photo?>" alt="<?=$photo?>"></a><?php
	}
	?>
</div>