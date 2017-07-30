<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
        <!-- Hamburger script comes here -->
        <script></script>
		<?php wp_head(); ?>
	</head>

	<body>
        <!-- resetting GRID -->
		<header class="row">
			<!-- UPPER : LEFT -->
            <div class="col-4">
	            <?php if ( get_theme_mod( 'header_logo' ) ) : ?>
                    <div class='logo'>
                        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                            <img src='<?php echo esc_url( get_theme_mod( 'header_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        </a>
                    </div>
	            <?php else : ?>
                <hgroup>
                    <h1 class='site-title'>
                        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				            <?php bloginfo( 'name' ); ?></a>
                    </h1>
                </hgroup>
            </div>
            <!-- UPPER : RIGHT -->
            <div class="col-8">
	            <?php endif; ?>
                <div class="naviBar menu">
		            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
                <div class="header_nav_resp">
                    <div class="burger_menu">
                        <div class="burger-bar"></div>
                    </div>
                </div>
            </div>
            <!-- LOWER PART -->
            <div class="col-12">

            </div>
		</header>