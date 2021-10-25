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
 * Class CoalawebTweetHelper
 */
class CoalawebTweetHelper
{
    /**
     * Build our params
     *
     * @param $params
     * @param $comParams
     * @param $uniqueid
     * @return mixed
     */
    public static function getMyparams($params, $comParams, $uniqueid)
    {
        $lang = JFactory::getLanguage();

        //Advanced
        $arr['uniqueid'] = $uniqueid;
        $arr['moduleClassSfx'] = htmlspecialchars($params->get('moduleclass_sfx', ''));
        $arr['uikitPrefix'] = $params->get('uikit_prefix', 'cw');
        $arr['loadCss'] = $params->get('load_css', '1');

        // Detect language
        $arr['langTag'] = $lang->getTag();

        //General
        $arr['twitterUser'] = $params->get('twitter_user', '');
        $arr['panelType'] = $params->get('panel_style', '');
        $arr['panelStyle'] = self::getPanel($arr['uikitPrefix'], $arr['panelType']);
        $arr['maxTweets'] = $params->get('max_tweets', '3');

        //Title
        $arr['showTitle'] = $params->get('show_title', '1');
        $arr['title'] = $params->get('show_text', '1') ? $params->get('title_text', JTEXT::_('MOD_CWTWEET_TITLE')) : '';
        $arr['titleFormat'] = $params->get('title_format', 'H3');
        $arr['titleIcon'] = '';
        $arr['titleAlign'] = $arr['uikitPrefix'] . '-text-' . $params->get('title_align', 'left');
        $arr['titleOpen'] = '<' . $arr['titleFormat'] . ' class="' . $arr['uikitPrefix'] . '-margin-small ' . $arr['titleAlign'] . '"><a href="';
        $arr['titleClose'] = '">' . $arr['titleIcon'] . ' ' . $arr['title'] . '</a></' . $arr['titleFormat'] . '>';

        //Tweet
        $arr['conFormat'] = $params->get('content_format', 'p');
        $arr['conBreak'] = $params->get('content_break', '1') ? 'cwt-content' : '';
        $arr['conAlign'] = $arr['uikitPrefix'] . '-text-' . $params->get('content_align', 'left');
        $arr['conOpen'] = '<' . $arr['conFormat'] . ' class="' . $arr['conBreak'] . ' ' . $arr['uikitPrefix'] . '-margin-small ' . $arr['conAlign'] . '">';
        $arr['conClose'] = '</' . $arr['conFormat'] . '>';

        // Load any needed assets
        self::addAssets($arr['loadCss']);

        return $arr;
    }

    /**
     * Build panel type
     *
     * @param $prefix
     * @param $type
     * @return string
     */
    private static function getPanel($prefix, $type)
    {

        switch ($type) {
            case '' :
                $panelStyle = '';
                break;
            case 'd' :
                $panelStyle = $prefix . '-panel-box';
                break;
            case 'p' :
                $panelStyle = $prefix . '-panel-box ' . $prefix . '-panel-box-primary';
                break;
            case 's' :
                $panelStyle = $prefix . '-panel-box ' . $prefix . '-panel-box-secondary';
                break;
            case 'h' :
                $panelStyle = $prefix . '-panel-hover';
                break;
        }

        return $panelStyle;
    }

    /**
     * Add assets
     * @param $loadCss
     */
    private static function addAssets($loadCss)
    {
        $doc = JFactory::getDocument();
        JHtml::_('jquery.framework');

        $urlModMedia = JURI::base(true) . '/media/coalawebsociallinks/modules/tweet/';
        if ($loadCss) {
            $doc->addStyleSheet($urlModMedia . 'css/cw-tweet-default.css');
        }

        $doc->addScript($urlModMedia . 'js/twitterFetcher.min.js');

        return;
    }
}