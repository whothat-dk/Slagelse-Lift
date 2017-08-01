<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) : while( have_posts() ) :
		the_post(); ?>

		<?php
		$lana_employee_name     = get_post_meta( get_the_ID(), 'lana_employee_name', true );
		$lana_employee_position = get_post_meta( get_the_ID(), 'lana_employee_position', true );
		?>

        <div class="col-md-3">

			<?php if ( has_post_thumbnail() ) : ?>
                <div class="employee-profile-picture">
					<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
                </div>
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
            <div <?php post_class(); ?>>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="employee-description">
							<?php the_content(); ?>
                        </div>
                    </div>
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
