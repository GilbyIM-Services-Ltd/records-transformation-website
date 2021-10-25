<?php
/**
 * @package     mod_custom_carousel
 *
 * @copyright   Copyright (C) 2005 - 2020 Records Transformation Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>

<!-- Three columns of text below the carousel -->
<div class="row">
	<?php foreach ($list as $item) : ?>
		<div class="col-lg-4">
			<svg class="bd-placeholder-img rounded-circle" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title><?php $item->title ?></title>
			<?php
			$images = json_decode($item->images); 
			if($images->image_intro)
			{ 
				echo '<image href="' . JUri::base() . htmlspecialchars($images->image_intro) . '" x="0" y="0" width="200" height="200"></image>';
			}
			else
			{
				echo '<rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">200x200</text>';
			}
			echo '</svg>';
				?>
			

			<h2 style="margin-top: 30px;">
				<?php 
					if($item->title)
					{
						echo $item->title;
					}
					else
					{
						echo 'Heading';
					}
				?>
			</h2>
			<p><?php echo strip_tags($item->introtext);	?></p>
			<p><a class="btn btn-secondary" href="<?php echo $item->link; ?>">View details &raquo;</a></p>
		</div>
	<?php endforeach; ?>
</div><!-- /.row --> 
