<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) : while( have_posts() ) :
		the_post(); ?>

		<?php
		$lana_testimonial_name     = get_post_meta( get_the_ID(), 'lana_testimonial_name', true );
		$lana_testimonial_position = get_post_meta( get_the_ID(), 'lana_testimonial_position', true );
		$lana_testimonial_company  = get_post_meta( get_the_ID(), 'lana_testimonial_company', true );
		?>

        <div class="col-md-9">
            <div <?php post_class(); ?>>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <blockquote class="testimonial">
							<?php the_content(); ?>
                        </blockquote>
                    </div>
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

        <div class="col-md-12">
            <p><?php _e( 'Sorry, this page does not exist.', 'lana-site' ); ?></p>
        </div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
