<?php 
// No direct access
defined('_JEXEC') or die; ?>

<?php 
	$image = ModCustomContentImageHelper::getCustomContentImageHelper($params); 
	$title = ModCustomContentImageHelper::getCustomContentTitleHelper($params); 
	$caption = ModCustomContentImageHelper::getCustomContentImageCaptionHelper($params); 
?>



<div id="notCarousel" class="carousel slide" >
	<div class="carousel-inner">
		<div class="carousel-item active">
	<?php 	if($image)
			{ 
				echo '<img src="' . JUri::base() . htmlspecialchars($image) . '" style=" object-fit: cover; object-position: center;width: 100%; filter: brightness(50%);">';

			}
			else
			{
				echo '<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>';
			} 
		?>
			<div class="container">
				<div class="carousel-caption text-start">
					<h1><?php echo $title ?></h1>
					<p><?php echo $caption;	?></p>
				</div>
			</div>
		</div>
	</div>
</div>