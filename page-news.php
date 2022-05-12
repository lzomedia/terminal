<?php
/**
 * Template Name: News
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="row">
        <div class="col-lg-12">
            <ol class="terminal-toc">
				<?php
				$paged    = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args     = [
					'post_type'      => 'post',
					'posts_per_page' => 10,
					'paged'          => $paged,
				];
				$wp_query = new WP_Query( $args );

				while ( have_posts() ) : the_post(); ?>
                    <li>
                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
				<?php endwhile; ?>


            </ol>
            <!-- then the pagination links -->
            <div class="row center-xs" style="margin-top:4rem">
                <div class="col-xs-6">
                    <div class="box">
						<?php next_posts_link( '&larr; Older posts' ); ?>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="box">
						<?php previous_posts_link( 'Newer posts &rarr;' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>