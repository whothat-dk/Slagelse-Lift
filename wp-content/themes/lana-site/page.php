<?php get_header(); ?>

    <div class="row">

        <div class="col-md-12">

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <h3 class="page-title">
					<?php the_title(); ?>
                </h3>

                <div class="panel panel-primary">
                    <div class="panel-body">
						<?php the_content(); ?>
                    </div>
					<?php if ( comments_open() || get_comments_number() )  : ?>
                        <div class="panel-footer">
							<?php comments_template(); ?>
                        </div>
					<?php endif; ?>
                </div>

				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'lana-site' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>',
				) );
				?>

			<?php endwhile;
			else : ?>
                <p><?php _e( 'Sorry, this page does not exist.', 'lana-site' ); ?></p>
			<?php endif; ?>

        </div>

    </div>

<?php get_footer(); ?>