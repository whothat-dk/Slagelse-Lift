<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <h3 class="text-center"><?php _e( 'Attachment', 'lana-site' ); ?></h3>

                <div class="attachment text-center">
                    <a href="<?php echo esc_url( wp_get_attachment_url( $post_id ) ); ?>" target="_blank">
                        <span class="glyphicon glyphicon-paperclip"></span>
						<?php the_title(); ?>
                    </a>
                </div>
                <hr/>

                <div class="panel panel-primary">
					<?php if ( comments_open() || get_comments_number() ) : ?>
                        <div class="panel-footer">
							<?php comments_template(); ?>
                        </div>
					<?php endif; ?>
                </div>

			<?php endwhile;
			else : ?>
                <p><?php _e( 'Sorry, this page does not exist.', 'lana-site' ); ?></p>
			<?php endif; ?>

        </div>
    </div>

<?php get_footer(); ?>