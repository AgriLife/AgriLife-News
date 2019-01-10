<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage flexopotamus
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php flexopotamus_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'flexopotamus' ) . '</span>', 'after' => '</div>' ) ); ?>

		<?php echo do_shortcode('[jprel]'); ?>

	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php $media_info = get_post_meta( $post->ID,'cmb_media_info', TRUE ); ?>
		<?php if ($media_info): ?>
		<div class="for-media-wrap entry-meta">
		<!-- <button id="media-info-button">Contacts</button>-->
		<div class="for-media entry-meta">
				<?php echo $media_info; ?>
		</div><!-- .for-media -->
		</div><!-- .for-media-wrap -->
		<?php endif; ?>

		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'flexopotamus_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<p class="post-author-title"><?php printf( esc_attr__( 'Article by %s', 'flexopotamus' ), get_the_author() ); ?></p>
				<p class="post-author-phone"><a href="tel:+1<?php echo get_the_author_meta( 'phone' ); ?>"><?php echo get_the_author_meta( 'phone' ); ?></a></p>
				<p class="post-author-email"><a href="mailto:<?php echo get_the_author_meta( 'email' ); ?>"><?php echo get_the_author_meta( 'user_email' ); ?></a></p>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all articles by %s <span class="meta-nav">&rarr;</span>', 'flexopotamus' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->

		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'flexopotamus' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'flexopotamus' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( '<p class="post-categories">Category: %1$s</p>', 'flexopotamus' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( '', 'flexopotamus' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
			<?php echo get_the_term_list( $post->ID, 'region_category', '<p class="region-tax-terms">Region: ', ', ', '</p>' ); ?>
			<?php echo get_the_term_list( $post->ID, 'agency_category', '<p class="agency-tax-terms">Agency: ', ', ', '</p>' ); ?>

	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
