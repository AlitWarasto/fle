<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $post->post_title. " | " . $sitename ?></title>
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

  <div class="collapse navbar-collapse justify-content-end mt-3" id="navbarSupportedContent">
    <ul class="navbar-nav pl-3">
      <li class="nav-item active">
        <a class="nav-link h4 cWhite" href="#">LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="cWhite"><span class="br cRed">|</span></li>
      <li class="nav-item">
        <a class="nav-link h4 cWhite" href="#">HUBUNGI KAMI</a>
      </li>
    </ul>
  </div>
</nav>
