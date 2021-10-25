<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModCustomContentImageHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    

    public static function getCustomContentImageCaptionHelper($params)
    {
		$input = JFactory::getApplication()->input;
		$id = $input->getInt('id', 0);
		
		if($id > 0 && $input->getString('option') == 'com_content')
		{
			switch ($input->getString('view')) :
				case 'article':
					$content_item = JTable::getInstance('content'); 
					$content_item->load($id);
					/*print_r($content_item);*/
					$caption = json_decode($content_item->images)->image_fulltext_caption;
					return $caption;
					break;
				case 'category':
					$content_item = JTable::getInstance('category'); 
					$content_item->load($id);
					$category_params = $content_item->params;
					$caption = json_decode($category_params)->image_alt;
					return $caption;
					break;
				default:
					break;
			endswitch;
		}
    }

	public static function getCustomContentImageHelper($params)
    {
		$input = JFactory::getApplication()->input;
		$id = $input->getInt('id', 0);
		
		if($id > 0 && $input->getString('option') == 'com_content')
		{
			switch ($input->getString('view')) :
				case 'article':
					$content_item = JTable::getInstance('content'); 
					$content_item->load($id);
					/*print_r($content_item);*/
					$image = json_decode($content_item->images)->image_fulltext;
					return $image;
					break;
				case 'category':
					$content_item = JTable::getInstance('category'); 
					$content_item->load($id);
					$category_params = $content_item->params;
					$image = json_decode($category_params)->image;
					return $image;
					break;
				default:
					break;
			endswitch;
		}
    }
	
	public static function getCustomContentTitleHelper($params)
    {
		$input = JFactory::getApplication()->input;
		$id = $input->getInt('id', 0);
		
		if($id > 0 && $input->getString('option') == 'com_content')
		{
			switch ($input->getString('view')) :
				case 'article':
					$content_item = JTable::getInstance('content'); 
					$content_item->load($id);
					$title = $content_item->title;
					return $title;
					break;
				case 'category':
					$content_item = JTable::getInstance('category'); 
					$content_item->load($id);
					$title = $content_item->title;
					return $title;
					break;
				default:
					break;
			endswitch;
		}
    }
	
}