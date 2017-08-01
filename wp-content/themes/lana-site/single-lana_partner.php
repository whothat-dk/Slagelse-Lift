<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) : while( have_posts() ) :
		the_post(); ?>

        <div class="col-md-12">

			<?php if ( has_post_thumbnail() ) : ?>
			<?php endif; ?>

            <div class="partner-title text-center">
                <h3>
					<?php _e( 'Partner', 'lana-site' ); ?>
                </h3>
                <div class="partner-picture" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
                </div>
                <h2>
					<?php the_title(); ?>
                </h2>
                <div class="partner-description">
					<?php the_content(); ?>
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
