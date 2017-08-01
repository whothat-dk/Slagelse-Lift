<?php get_header(); ?>

    <div class="row text-center title-row">
        <div class="col-sm-12">
            <h1 class="oops">
				<?php _e( 'Oops!', 'lana-site' ); ?>
            </h1>
            <h2 class="title">
				<?php _e( '404 - Page Not Found.', 'lana-site' ); ?>
            </h2>
            <p class="description">
				<?php _e( 'Whatever you were looking for was not found.', 'lana-site' ); ?>
            </p>
        </div>
    </div>

    <div class="row text-center helper-row">
        <div class="col-sm-6">
            <h2 class="title">
				<?php _e( 'Search', 'lana-site' ); ?>
            </h2>
            <p>
				<?php _e( 'Maybe try to use a search?', 'lana-site' ); ?>
            </p>
			<?php get_search_form(); ?>
        </div>
        <div class="col-sm-6">
            <h2 class="title">
				<?php _e( 'Home', 'lana-site' ); ?>
            </h2>
            <p>
				<?php _e( 'Or click the button below to go to the Home page', 'lana-site' ); ?>
            </p>
            <p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" rel="home"
                   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<?php _e( 'Take Me Home', 'lana-site' ); ?>
                </a>
            </p>
        </div>
    </div>

<?php get_footer(); ?>