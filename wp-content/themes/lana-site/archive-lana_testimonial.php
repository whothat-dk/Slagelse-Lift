<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">
            <h2>
				<?php _e( 'Testimonials', 'lana-site' ); ?>
            </h2>
            <hr/>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php
				$lana_testimonial_name     = get_post_meta( get_the_ID(), 'lana_testimonial_name', true );
				$lana_testimonial_position = get_post_meta( get_the_ID(), 'lana_testimonial_position', true );
				$lana_testimonial_company  = get_post_meta( get_the_ID(), 'lana_testimonial_company', true );
				?>

                <div <?php post_class(); ?>>
                    <div class="row">

                        <div class="col-md-9">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <blockquote class="testimonial">
										<?php the_excerpt(); ?>
                                    </blockquote>
                                    <a class="btn btn-primary btn-sm read-more" href="<?php the_permalink(); ?>">
										<?php _e( 'Read more', 'lana-site' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
							<?php if ( has_post_thumbnail() ) : ?>
                                <div class="testimonial-profile-picture text-center">
									<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-circle' ) ); ?>
                                </div>
							<?php endif; ?>

                            <div class="testimonial-information text-center">
                                <div class="testimonial-name">
									<?php echo esc_html( $lana_testimonial_name ); ?>
                                </div>
                                <div class="testimonial-position">
									<?php echo esc_html( $lana_testimonial_position ); ?>
                                </div>
                                <div class="testimonial-company">
									<?php echo esc_html( $lana_testimonial_company ); ?>
                                </div>
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

    </div>

<?php get_footer(); ?>