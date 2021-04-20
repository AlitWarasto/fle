<?php
/**
 * Template Name: Landing Page
 *
 * @package WordPress
 * @subpackage fledigital
 * @since fledigital 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly

$detect = new Mobile_Detect; #mobile detect#
if ( $detect->isMobile() && !$detect->isTablet() ){
  include(TEMPLATEPATH.'/inc/page/landingMobile.php');
}else{
  include(TEMPLATEPATH.'/inc/page/landingDesktop.php');
}?>