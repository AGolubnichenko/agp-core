<?php
/**
 * Collection of a base classes for a custom WordPress plugins
 * 
 * @author Alexey Golubnichenko <profosbox@gmail.com>
 * @license GPLv2
 * @link https://github.com/AGolubnichenko/agp-core
 * @package Agp\Core
 * @version 1.0.6
 */

/**
 * Minimum required PHP Version
 */
if ( !defined('AGP_PHP_VERSION') ) {
    define('AGP_PHP_VERSION', 50300);    
}

/**
 * Gets current PHP version ID
 * 
 * @return int
 */
if ( !function_exists( 'Agp_GetCurrentPHPVersionId' ) ) {
    
    function Agp_GetCurrentPHPVersionId() {
        $version = phpversion();
        if ($version !== FALSE) {
            $version = explode('.', $version);
            $version = $version[0] * 10000 + $version[1] * 100 + $version[2];
            return $version;        
        } else {
            return AGP_PHP_VERSION;
        }
    }    
    
}

/**
 * Gets PHP Version by version ID
 * 
 * @param int $id
 * @return string
 */
if ( !function_exists( 'Agp_GetPHPVersionById' ) ) {
    
    function Agp_GetPHPVersionById( $id ) {
        $version = array();
        $version[0] = (int) floor( $id / 10000 );
        $version[1] = (int) floor( ($id  - $version[0] * 10000) / 100 );
        $version[2] = (int) floor( ($id  - $version[0] * 10000 - $version[1] * 100) );
        $version = implode('.', $version);
        return $version;
    }    
    
}
