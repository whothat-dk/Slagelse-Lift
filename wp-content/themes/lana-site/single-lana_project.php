<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) : while( have_posts() ) :
		the_post(); ?>

		<?php
		$lana_project_category_terms = get_terms( 'lana_project_category' );
		$lana_project_tag_terms      = get_terms( 'lana_project_tag' );

		$lana_project_type    = get_post_meta( get_the_ID(), 'lana_project_type', true );
		$lana_project_manager = get_post_meta( get_the_ID(), 'lana_project_manager', true );
		?>

		<?php
		/**
		 * Header image
		 * with mpt
		 */
		if ( class_exists( 'Multi_Post_Thumbnails' ) ) {
			if ( Multi_Post_Thumbnails::has_post_thumbnail( 'lana_project', 'lana-project-header-image', get_the_ID() ) ) {
				echo Multi_Post_Thumbnails::get_the_post_thumbnail( 'lana_project', 'lana-project-header-image', get_the_ID(), 'full', array( 'class' => 'project-header img-responsive' ) );
			}
		}
		?>

        <div class="col-md-12">
            <div class="project-title text-center">
                <h3>
					<?php _e( 'Project', 'lana-site' ); ?>
                </h3>
                <h2>
					<?php the_title(); ?>
                </h2>
            </div>
        </div>

        <div class="col-md-9">

            <h3>
				<?php _e( 'Description', 'lana-site' ); ?>
            </h3>

            <div <?php post_class(); ?>>
                <div class="panel panel-primary">
                    <div class="panel-body">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-3">

			<?php if ( has_post_thumbnail() ) : ?>
                <h3>
					<?php _e( 'Project Image', 'lana-site' ); ?>
                </h3>
                <div class="thumbnail" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
                </div>
                <hr/>
			<?php endif; ?>

            <h3>
				<?php _e( 'Project Information', 'lana-site' ); ?>
            </h3>
            <div class="panel panel-primary project-information">
                <div class="panel-body">

					<?php if ( $lana_project_category_terms && ! is_wp_error( $lana_project_category_terms ) ) : ?>
                        <p>
                            <b><?php _e( 'Categories', 'lana-site' ); ?></b>
                        </p>
                        <ul class="lana-project-categories">
							<?php foreach ( $lana_project_category_terms as $term ) { ?>
                                <li>
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <a href="<?php echo get_term_link( $term->slug, 'lana_project_category' ); ?>">
										<?php echo $term->name; ?>
                                    </a>
                                </li>
							<?php } ?>
                        </ul>
					<?php endif; ?>

					<?php if ( $lana_project_tag_terms && ! is_wp_error( $lana_project_tag_terms ) ) : ?>
                        <p>
                            <b><?php _e( 'Tags', 'lana-site' ); ?></b>
                        </p>
                        <ul class="lana-project-tags">
							<?php foreach ( $lana_project_tag_terms as $term ) { ?>
                                <li>
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <a href="<?php echo get_term_link( $term->slug, 'lana_project_tag' ); ?>">
										<?php echo $term->name; ?>
                                    </a>
                                </li>
							<?php } ?>
                        </ul>
					<?php endif; ?>

					<?php if ( $lana_project_type ) : ?>
                        <p>
                            <b><?php _e( 'Type', 'lana-site' ); ?></b>
                            <br/>
							<?php echo esc_html( $lana_project_type ); ?>
                        </p>
					<?php endif; ?>

					<?php if ( $lana_project_manager ) : ?>
                        <p>
                            <b><?php _e( 'Project Manager', 'lana-site' ); ?></b>
                            <br/>
							<?php echo esc_html( $lana_project_manager ); ?>
                        </p>
					<?php endif; ?>

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
