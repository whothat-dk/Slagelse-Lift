</div>
</div>
<div class="clearfix"></div>
</div>

<div <?php lana_site_pre_footer_class( 'pre-footer' ); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
				<?php dynamic_sidebar( 'footer-left' ); ?>
            </div>
            <div class="col-md-4">
				<?php dynamic_sidebar( 'footer-middle' ); ?>
            </div>
            <div class="col-md-4">
				<?php dynamic_sidebar( 'footer-right' ); ?>
            </div>
        </div>
    </div>
</div>

<div <?php lana_site_footer_class( 'footer' ); ?>>
    <div class="container">

        <p <?php lana_site_footer_copyright_class( 'footer-copyright' ); ?>>
			<?php _e( 'Copyright', 'lana-site' ); ?>
            &copy;
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php echo date_i18n( __( 'Y', 'lana-site' ) ); ?>
        </p>

		<?php if ( has_nav_menu( 'lana_footer' ) && get_theme_mod( 'lana_site_footer_type', 'text' ) == 'navbar' ): ?>
            <div <?php lana_site_footer_navbar_class( 'lana-footer-navigation' ); ?>>
				<?php lana_site_footer_nav_menu(); ?>
            </div>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'lana_site_footer_type', 'text' ) == 'text' ): ?>
            <p <?php lana_site_footer_text_class( 'footer-text' ); ?>>
				<?php echo esc_html( get_theme_mod( 'lana_site_footer_text' ) ); ?>
            </p>
		<?php endif; ?>

        <div class="clearfix"></div>

        <a class="scroll-to-top" href="#">
            <span class="up-icon">
                <i class="fa fa-angle-up"></i>
            </span>
        </a>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>