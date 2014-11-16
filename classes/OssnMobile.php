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
class OssnMobile {
    public function initialize() {
        $this->mobileDetect = new Mobile_Detect;
    }

    public function isMobile() {
        self::initialize();
        return $this->mobileDetect->isMobile();
    }
}