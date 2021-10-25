<?php
/**
 * @package     mod_custom_carousel
 *
 * @copyright   Copyright (C) 2005 - 2020 Records Transformation Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
	<?php $current_item = 0; ?>
	<?php foreach ($list as $item) : 
		echo '<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="' . $current_item . '" class="active" aria-current="true" aria-label="Slide ' . $current_item . '"></button>';
		$current_item = $current_item + 1;
		endforeach; 
	?>
		
    </div>
	<div class="carousel-inner">
		<?php $current_item = 0; ?>
		<?php foreach ($list as $item) : 

			if($current_item == 0)
			{
				echo '<div class="carousel-item active">';
			}
			else
			{
				echo '<div class="carousel-item">';
			}
		?>

		<?php $images = json_decode($item->images); 

			if($images->image_fulltext)
			{ 

				echo '<img src="' . JUri::base() . htmlspecialchars($images->image_fulltext) . '" style="  object-fit: cover; object-position: center;width: 100%; filter: brightness(50%);">';
			}
			else
			{
				echo '<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>';
			} 
		?>
			<div class="container">
				<div class="carousel-caption text-start">
					<h1><?php echo $item->title; ?></h1>
					<p><?php echo $images->image_fulltext_caption;	?></p>
					<p><a class="btn btn-lg btn-primary" href="<?php echo $item->link; ?>">Read more</a></p>
				</div>
			</div>
		</div>

	  	
	<?php 
		$current_item = $current_item + 1;
		endforeach; 
	?>  
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
    </button>
</div>
