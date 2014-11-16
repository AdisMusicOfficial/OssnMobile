<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
define('__OSSN_MOBILE__', ossn_route()->com . 'OssnMobile/');

require_once(__OSSN_MOBILE__ . 'vendors/Mobile_Detect.php');
require_once(__OSSN_MOBILE__ . 'classes/OssnMobile.php');
require_once(__OSSN_MOBILE__ . 'libraries/ossn.lib.mobile.php');

function ossn_mobile_init() {
    if (OssnMobile()->isMobile()) {

        ossn_new_css('ossn.mobile.default', 'components/OssnMobile/css/default');
        ossn_load_css('ossn.mobile.default');
        ossn_unload_css('ossn.default');

        ossn_add_hook('halt', 'view:components/OssnChat/views/OssnChat/chatbar', 'ossn_mobile_remove_chat');

    }
}

function ossn_mobile_remove_chat() {
    return false;
}

ossn_register_callback('ossn', 'init', 'ossn_mobile_init');
