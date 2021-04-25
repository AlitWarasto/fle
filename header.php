<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $sitedesc." | ".$sitename ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ebf84d91a6.js" crossorigin="anonymous"></script>
	<?php
	wp_head();
	get_header();?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4 container-fluid">
	<div class="dLogo d-flex">
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}?>
	</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php 
  $detect = new Mobile_Detect; #mobile detect#
  if ( $detect->isMobile() && !$detect->isTablet() ){?>
  <div class="collapse navbar-collapse justify-content-end mt-3 bRedOld" id="navbarSupportedContent">
    <ul class="navbar-nav pl-3">
      <li class="nav-item active">
        <a class="nav-link h4 cWhite mt-2" href="https://member.fledigital.com/member-area/login/">LOGIN</a>
      </li>
      <li class="cWhite pr-3"><div class="dropdown-divider m-0"></div></li>
      <li class="nav-item">
        <a class="nav-link h4 cWhite mt-2" href="https://api.whatsapp.com/send/?phone=628112633997">HUBUNGI KAMI</a>
      </li>
    </ul>
  </div>
  <?php }else{ ?>
    <div class="collapse navbar-collapse justify-content-end mt-3" id="navbarSupportedContent">
    <ul class="navbar-nav pl-3">
      <li class="nav-item active">
        <a class="nav-link h4 cWhite" href="https://member.fledigital.com/member-area/login/">LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="cWhite"><span class="br cRed">|</span></li>
      <li class="nav-item">
        <a class="nav-link h4 cWhite" href="https://api.whatsapp.com/send/?phone=628112633997">HUBUNGI KAMI</a>
      </li>
    </ul>
  </div>
  <?php } ?>
</nav>
