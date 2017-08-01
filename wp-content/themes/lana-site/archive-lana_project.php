<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">
            <h2>
				<?php _e( 'Projects', 'lana-site' ); ?>
            </h2>
            <hr/>
        </div>
    </div>

    <div class="row">

        <div <?php lana_site_content_class(); ?>>

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <div <?php post_class(); ?>>
                    <div class="thumbnail">

                        <div class="caption text-center">
                            <h3 class="widget-title">
								<?php the_title(); ?>
                            </h3>
                            <hr/>

							<?php if ( has_post_thumbnail() ) : ?>
                                <div class="thumbnail" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail(); ?>
                                </div>
                                <hr/>
							<?php endif; ?>

							<?php the_excerpt(); ?>
                            <br/>
                            <p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">
									<?php _e( 'Project details', 'lana-site' ); ?>
                                </a>
                            </p>
                        </div>

                    </div>
                </div>

			<?php endwhile; ?>

                <div class="col-md-12 text-center">
					<?php the_posts_pagination( array( 'type' => 'list' ) ); ?>
                </div>

			<?php else : ?>
                <h2><b><?php _e( 'No Posts', 'lana-site' ); ?></b></h2>
                <p><?php _e( 'Sorry, What you were looking for is not here.', 'lana-site' ); ?></p>
			<?php endif; ?>

        </div>

        <div <?php lana_site_sidebar_class( 'primary-sidebar' ); ?>>
			<?php dynamic_sidebar( 'primary' ); ?>
        </div>
    </div>

<?php get_footer(); ?>