<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage flexopotamus
 * @since flexopotamus 1.0
 */

get_header(); ?>
<div class="content-wrap">
	<section id="content" role="main" class="two-of-3 column">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title section-title"><?php
						printf( __( 'Tag Archives: %s', 'flexopotamus' ), '<span>' . single_tag_title( '', false ) . '</span> <strong>Note:</strong> <em>Some information may be out of date.</em>' );
					?></h1>

					<?php
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
					?>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php flexopotamus_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'flexopotamus' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'flexopotamus' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

	</section><!-- /end #content -->

<?php get_sidebar(); ?>
	
</div><!-- /.content-wrap -->

<?php get_footer(); ?>