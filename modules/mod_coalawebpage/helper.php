<?php

/**
 * @package     Joomla
 * @subpackage  CoalaWeb Social Links
 * @author      Steven Palmer <support@coalaweb.com>
 * @link        https://coalaweb.com/
 * @license     GNU/GPL V3 or later; https://www.gnu.org/licenses/gpl-3.0.html
 * @copyright   Copyright (c) 2021 Steven Palmer All rights reserved.
 *
 * CoalaWeb Social Links is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');

/**
 * Class CoalawebPageHelper
 */
class CoalawebPageHelper
{
    /**
     * @param $pageParams
     * @return string
     */
    public static function getPageHtml5($pageParams)
    {

        $output[] = '<div class="fb-page"'
            . ' data-href="' . $pageParams['fbPageLink'] . '"'
            . ' data-tabs="' . $pageParams['fbTabsList'] . '"'
            . ' data-small-header="' . $pageParams['fbSmallHeader'] . '"'
            . ' data-adapt-container-width="true"'
            . ' data-width="' . $pageParams['fbWidth'] . '"'
            . ' data-height="' . $pageParams['fbHeight'] . '"'
            . ' data-show-facepile="' . $pageParams['fbFacepile'] . '"'
            . ' data-hide-cover="' . $pageParams['fbCover'] . '">'
            . ' </div>';

        return implode("\n", $output);
    }

}