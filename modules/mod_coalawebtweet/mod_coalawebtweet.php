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

require_once dirname(__FILE__) . '/helper.php';

$helpPath = '/components/com_coalawebsociallinks/helpers/';
JLoader::register('CoalaWebToolsHelper', JPATH_ADMINISTRATOR . $helpPath . 'coalawebtools.php');

//Keeping the parameters in the component keeps things clean and tidy.
$comParams = JComponentHelper::getParams('com_coalawebsociallinks');

// Lets get our helper functions
$comHelp = new CoalaWebToolsHelper();
$help = new CoalawebTweetHelper();

//Check dependencies
$assets = [
    'mobile' => false,
    'count' => true,
    'tools' => true,
    'latest' => false
];
$extensions = array(
    'components' => array(
        'com_coalawebsociallinks'
    ),
    'modules' => array(
    ),
    'plugins' => array(
    )
);
$checkOk = $comHelp::checkDependencies('MOD_CWTWEET',$assets, $extensions);

// Use local param or from the component
$debug = null !== $params->get('debug') ? $params->get('debug') : $comParams->get('debug', '0');
if ($checkOk['ok'] === false) {
    if ($debug === '1') {
        JFactory::getApplication()->enqueueMessage($checkOk['msg'], $checkOk['type']);
    }
    return;
}

//Unique ID
$uniqueId = 'cwtweet' . $module->id;
$myparams = $help->getMyparams($params, $comParams, $uniqueId);

// Load the language files
$jlang = JFactory::getLanguage();

// Module
$jlang->load('mod_coalawebtweet', JPATH_SITE, 'en-GB', true);
$jlang->load('mod_coalawebtweet', JPATH_SITE, $jlang->getDefault(), true);
$jlang->load('mod_coalawebtweet', JPATH_SITE, null, true);

// Component
$jlang->load('com_coalawebsociallinks', JPATH_ADMINISTRATOR, 'en-GB', true);
$jlang->load('com_coalawebsociallinks', JPATH_ADMINISTRATOR, $jlang->getDefault(), true);
$jlang->load('com_coalawebsociallinks', JPATH_ADMINISTRATOR, null, true);

if($myparams['uikitPrefix'] == 'cw') {
    $helpFunc = new CwGearsHelperLoadcount();
    $url = JURI::getInstance()->toString();
    $helpFunc::setUikitCount($url);
}

require JModuleHelper::getLayoutPath('mod_coalawebtweet', $params->get('layout', 'default'));