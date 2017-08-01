<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">
            <h2>
				<?php _e( 'Employees', 'lana-site' ); ?>
            </h2>
            <hr/>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php
				$lana_employee_name     = get_post_meta( get_the_ID(), 'lana_employee_name', true );
				$lana_employee_position = get_post_meta( get_the_ID(), 'lana_employee_position', true );
				?>

                <div <?php post_class(); ?>>
                    <div class="row">
                        <div class="col-md-3">

							<?php if ( has_post_thumbnail() ) : ?>
                                <a class="employee-profile-picture" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                                </a>
							<?php endif; ?>

                            <div class="employee-information text-center">
                                <div class="employee-name">
									<?php echo esc_html( $lana_employee_name ); ?>
                                </div>
                                <div class="employee-position">
									<?php echo esc_html( $lana_employee_position ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="employee-description">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
										<?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-sm read-more" href="<?php the_permalink(); ?>">
								<?php _e( 'Profile', 'lana-site' ); ?>
                            </a>
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