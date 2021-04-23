<?php 
if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly

$detect = new Mobile_Detect; #mobile detect#
if ( $detect->isMobile() && !$detect->isTablet() ){
  include(TEMPLATEPATH.'/inc/mobile/footerMobile.php');
}else{
  include(TEMPLATEPATH.'/inc/desktop/footerDesktop.php');
}?>