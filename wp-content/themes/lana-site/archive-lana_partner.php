<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">
            <h2>
				<?php _e( 'Partners', 'lana-site' ); ?>
            </h2>
            <hr/>
        </div>
    </div>

    <div class="row">

		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <div class="col-md-3">
                <div <?php post_class(); ?>>
                    <div class="thumbnail">

						<?php if ( has_post_thumbnail() ) : ?>
                            <div class="testimonial-profile-picture text-center">
								<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                            </div>
						<?php endif; ?>

                        <div class="caption text-center">
                            <h3>
								<?php the_title(); ?>
                            </h3>
                        </div>
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

<?php get_footer(); ?>