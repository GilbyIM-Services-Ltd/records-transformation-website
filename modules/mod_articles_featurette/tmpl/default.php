<?php
	defined('_JEXEC') or die;
	if($layout!='edit'){
	$canEdit = $item->params->get('access-edit');
	JHtml::addIncludePath(JPATH_BASE.'/components/com_content/helpers');
}
?>
<hr class="featurette-divider">
<?php if($image_position=="right")

	{?>
	<div class="row featurette mod-custom-featurette__<?php echo $moduleclass_sfx; ?>" id="module_<?php echo $module->id; ?>">
		<div class="col-md-7">
			<h2 class="featurette-heading"><a href="<?php echo $item->link;?>">
				<?php echo trim($item->title);
					if($item_images->image_intro_caption)
					{
						echo '. <span class="text-muted">' . trim($item_images->image_intro_caption) . '</span></a></h2>';
					}
					else
					{
						echo '</a></h2>';
					}
		 		?>

			<p class="lead"><?php echo strip_tags($item->introtext); ?></p>
			<p><a class="btn btn-lg btn-primary" href="<?php echo $item->link; ?>">Read more</p></a>
		</div>
		<div class="col-md-5">
			<a href="<?php echo $item->link;?>">
				<img src="<?php echo htmlspecialchars($item_images->image_intro); ?>" style="max-width:100%;" alt="<?php echo htmlspecialchars($item_images->image_intro_alt); ?>">
			</a>
		</div>
	</div>
	<?php }
	elseif($image_position=="left")
		{?>
		<div class="row featurette mod-custom-featurette__<?php echo $moduleclass_sfx; ?>"  id="module_<?php echo $module->id; ?>">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading"><a href="<?php echo $item->link;?>">
					<?php echo $item->title;
		 				if($item_images->image_intro_caption)
						{
							echo '. <span class="text-muted">' . $item_images->image_intro_caption . '</span></a></h2>';
						}
		 				else
						{
							echo '</a></h2>';
						}
		 			?>
					

				<p class="lead"><?php echo strip_tags($item->introtext); ?></p>
				<p class="text-end"><a class="btn btn-lg btn-primary" href="<?php echo $item->link; ?>">Read more</p></a>
			</div>
			<div class="col-md-5 order-md-1">
				<a href="<?php echo $item->link;?>">
				<img src="<?php echo htmlspecialchars($item_images->image_intro); ?>" style="max-width:100%;" alt="<?php echo htmlspecialchars($item_images->image_intro_alt); ?>">
				</a>
			</div>
		</div>
	<?php } ?>
