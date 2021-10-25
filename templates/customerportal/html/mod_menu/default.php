<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$id = '';

if ($tagId = $params->get('tag_id', ''))
{
	$id = ' id="' . $tagId . '"';
}
?>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		<?php foreach ($list as $i => &$item)
		{
			$class = 'item-' . $item->id;

			if ($item->id == $default_id)
			{
				$class .= ' default';
			}

			if ($item->id == $active_id || ($item->type === 'alias' && $item->params->get('aliasoptions') == $active_id))
			{
				$class .= ' current';
			}

			if (in_array($item->id, $path))
			{
				$class .= ' active';
			}
			elseif ($item->type === 'alias')
			{
				$aliasToId = $item->params->get('aliasoptions');

				if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
				{
					$class .= ' active';
				}
				elseif (in_array($aliasToId, $path))
				{
					$class .= ' alias-parent-active';
				}
			}

			if ($item->type === 'separator')
			{
				$class .= ' divider';
			}

			if ($item->deeper)
			{
				$class .= ' dropdown';
			}

			/*if ($item->parent)
			{
				$class .= ' parent';
			}*/


			echo '<li class="nav-item ' . $class . '">';

			switch ($item->type) :
				case 'separator':
				case 'component':
				case 'heading':
				case 'url':
					$attributes = array();

					echo '<a ';
					if($item->deeper)
					{
						/* Need to check whether nav-link is defined as a class via front end.  See str_contains()*/
						if ($item->anchor_css)
						{
							echo 'class="' . 'nav-link dropdown-toggle ' . $item->anchor_css . '" ';
						}
					echo 'data-bs-toggle="dropdown" ';
					echo 'href="#" ';
					echo 'aria-expanded="false"';
					}
					else
					{
					if (in_array($item->id, $path))
						{
							$class .= ' active';
							echo 'class="' . 'nav-link ' . $class . $item->anchor_css . '" ';
							echo 'href="' . $item->flink . '"';
						}
						elseif ($item->type === 'alias')
						{
							$aliasToId = $item->params->get('aliasoptions');

							if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
							{
								$class .= ' active';
								echo 'class="' . 'nav-link ' . $class . $item->anchor_css . '" ';
								echo 'href="' . $item->flink . '"';
							}
							elseif (in_array($aliasToId, $path))
							{
								$class .= ' alias-parent-active';
								echo 'class="' . 'nav-link ' . $class . $item->anchor_css . '" ';
								echo 'href="' . $item->flink . '"';
							}
						}
					else
						{
						echo 'class="' . 'nav-link ' . $item->anchor_css . '" ';
						echo 'href="' . $item->flink . '"';						
						}
					}
					echo '>' . $item->title . '</a>';
					if ($item->anchor_title)
						{
							echo '>' . $item->anchor_title . '</a>';
						}
					break;

				default:
					/*require JModuleHelper::getLayoutPath('mod_menu', 'default_url');*/
					break;
			endswitch;

			// The next item is deeper.
			if ($item->deeper)
			{
				echo '<ul class="dropdown-menu">';
			}
			// The next item is shallower.
			elseif ($item->shallower)
			{
				echo '</li>';
				echo str_repeat('</ul></li>', $item->level_diff);
			}
			// The next item is on the same level.
			else
			{
				echo '</li>';
			}
		}
		?></ul>
