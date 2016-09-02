<?php 
// Template Name: Home page

get_header(); ?>

		<section class="featured-content clearfix">
			<header class="featured-content-header">
				<h1 class="section-title">Featured Stories</h1>
			</header>
			<div id="feature-container">
	             <img id="loading" src="<?php bloginfo('stylesheet_directory'); ?>/images/ajax-loader.gif" alt="image to indicate loading of the featured images" />
			</div>
			<div class="one-of-3 clearfix featured-stories-container"> 
			<ol class="featured-stories"> 
			<?php 
			global $post, $do_not_duplicate;
			$do_not_duplicate = array(); // set befor loop variable as array
			$my_query = new WP_Query('meta_key=feature-homepage&meta_value=1&posts_per_page=3');
			$count = 0;
			while ($my_query->have_posts()) : $my_query->the_post();
  			$do_not_duplicate[] = $post->ID; // remember ID's in loop

	  		$count++;
	  		?>
			<li class="media-box slideshow-thumb-item item-<?php echo $count;?>">
				<div class="mb-inner">
					<a href="<?php the_permalink();?>" id="l<?php echo $count;?>" class="mb-link">
						<?php
						if ( has_post_thumbnail() ) {
			  				the_post_thumbnail('feature-thumb'); 
						} else  { 
							echo '<img src="'.get_bloginfo("template_url").'/images/AgriLife-default-post-image.png" alt="AgriLife Logo" title="AgriLife" class="attachment-feature-thumb wp-post-image" />'; 
				}	?>	
						<h2 class="mb-post-title cat-post-title"><?php the_title(); ?></h2>
					</a>
				</div>				
			</li>				
																			
			<?php endwhile;  wp_reset_query(); ?>					
		</ol>
	</div>
		</section> 
<?php category_navigation_section() ?>
	
<div class="content-wrap">
				
	<section id="content" role="main" class="two-of-3 column">
	<div class="spotlight-section">	
		<div class="section-title"></div>			
		
		<?php $my_query = new WP_Query( 
			array(
				'meta_key' =>  'feature-homepage',
				'meta_value' => 1,
				'posts_per_page' => 3,
				'post__not_in' => $do_not_duplicate
				    )
			);
  		$do_not_duplicate[] = $post->ID; while ($my_query->have_posts()) : $my_query->the_post();
  		update_post_caches($posts);
  		?>
		<article class="media-box post spotlight clearfix">
		<div class="mb-inner">				
			<header class="mb-head">
			<h2 class="mb-post-title entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			</header>
			<a class="mb-link spotlight clearfix" href="<?php the_permalink();?>">				
				<?php
						if ( has_post_thumbnail() ) {
			  				the_post_thumbnail('feature-thumb'); 
						} else  { 
							echo '<img src="'.get_bloginfo("template_url").'/images/AgriLife-default-post-image.png" alt="AgriLife Logo" title="AgriLife" class="attachment-feature-thumb wp-post-image" />'; 
				}	?>		
				<?php the_excerpt(); ?>
			</a>
		</div><!-- .end mb-inner -->			
		</article><!-- .end media-box -->
		<?php endwhile;  wp_reset_query(); ?>
		
	</div>
	
	<div class="recent-stories clearfix">
		<div class="section-title"></div>
		
		<div class="recent-column-first one-of-2">
			
		<?php $my_query = new WP_Query( 
			array(
				'posts_per_page' => 2,
				'post__not_in' => $do_not_duplicate
				    )
			);
  		$do_not_duplicate[] = $post->ID; while ($my_query->have_posts()) : $my_query->the_post();
  		update_post_caches($posts);
  		?>			
			<article class="post">
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			</article>
			
		<?php endwhile;  wp_reset_query(); ?>
			
		</div><!-- /recent-column-first -->

		<div class="recent-column-second one-of-2">			
		<?php $my_query = new WP_Query( 
			array(
				'posts_per_page' => 2,
				'offset' => 2,
				'post__not_in' => $do_not_duplicate
				    )
			);

  		$do_not_duplicate[] = $post->ID; while ($my_query->have_posts()) : $my_query->the_post();
  		update_post_caches($posts);
  		?>			
			<article class="post">
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			</article>
			
		<?php endwhile;  wp_reset_query(); ?>
		
		</div><!-- /recent-column-second -->		
			<p class="one-of-2"><a class="button recent-archives-button archives-button" href="<?php bloginfo('url'); ?>/articles">Article Archives</a></p>	
	</div>	

	</section><!-- /end #content -->
	
	<section id="sidebar" class="sidebar one-of-3 column" role="navigation">

	<?php top_sidebar_section() ?>
	
		<?php if ( ! dynamic_sidebar( 'Home Page Sidebar' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'flexopotamus' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'flexopotamus' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

		<?php endif; // end aside widget area ?>
	
	</section><!-- /end .sidebar -->
	
</div><!-- /.content-wrap -->

<?php get_footer(); ?>