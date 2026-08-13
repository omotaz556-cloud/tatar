<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Project:       Novaterra                                                    ##
##  Filename       Math.php                                                    ##
##  Developed by:  martinambrus                                                ##
##  License:       Novaterra Project                                            ##
##  Copyright:     Novaterra (c) 2010-2017. All rights reserved.                ##
##  URLs:          https://novaterra.martinambrus.com                		       ##
##  Source code:   https://github.com/YOUR-ORG/Novaterra		                   ##
##                                                                             ##
#################################################################################

namespace App\Utils;

/**
 *
 * Mathematics-related helpers.
 *
 * @author martinambrus
 *
 */
class Math {

    public static function isInt($val) {
        return (is_numeric($val) && intval($val) === $val);
    }

    public static function isFloat($val) {
        return (is_numeric($val) && floatval($val) === $val);
    }

}