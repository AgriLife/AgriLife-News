<?php 
// Get the ID of a given category
$farm_ranch_cat_id = get_category_by_slug( 'farm-ranch' ); 
$lawn_garden_cat_id = get_category_by_slug( 'lawn-garden' ); 
$life_health_cat_id = get_category_by_slug( 'life-health' );
$environment_cat_id = get_category_by_slug( 'environment' );
$business_cat_id = get_category_by_slug( 'business' );
$science_tech_cat_id = get_category_by_slug( 'science-and-technology' );

// Get the link for a given category
$farm_ranch_cat_link = get_category_link( $farm_ranch_cat_id );
$lawn_garden_cat_link = get_category_link( $lawn_garden_cat_id );
$life_health_cat_link = get_category_link( $life_health_cat_id );
$environment_cat_link = get_category_link( $environment_cat_id );
$business_cat_link = get_category_link( $business_cat_id );
$science_tech_cat_link = get_category_link( $science_tech_cat_id );
?>

	<section class="cat-nav-container clearfix">			
		<article class="media-box cat-nav cat-farm-ranch one-of-3 first clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-farm-ranch"><a href="<?php echo esc_url( $farm_ranch_cat_link ); ?>">Farm &amp; Ranch <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('farm-ranch') ?>				
		</div><!-- .end mb-inner -->	
		</article><!-- .end media-box -->

		<article class="media-box cat-nav cat-lawn-garden one-of-3 second clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-lawn-garden"><a href="<?php echo esc_url( $lawn_garden_cat_link ); ?>">Lawn &amp; Garden <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('lawn-garden') ?>
		</div><!-- .end mb-inner -->			
		</article><!-- .end media-box -->

		<article class="media-box cat-nav cat-life-health one-of-3 third clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-life-health"><a href="<?php echo esc_url( $life_health_cat_link ); ?>">Life &amp; Health <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('life-health') ?>			
		</div><!-- .end mb-inner -->
		</article><!-- .end media-box -->

		<article class="media-box cat-nav cat-environment one-of-3 fourth clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-environment"><a href="<?php echo esc_url( $environment_cat_link ); ?>">Environment <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('environment') ?>
		</div><!-- .end mb-inner -->			
		</article><!-- .end media-box -->
	
		<article class="media-box cat-nav cat-business one-of-3 fifth clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-business"><a href="<?php echo esc_url( $business_cat_link ); ?>">Business <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('business') ?>		
		</div><!-- .end mb-inner -->	
		</article><!-- .end media-box -->
			
		<article class="media-box cat-nav cat-science-technology one-of-3 last clearfix">
		<div class="mb-inner cat-nav-inner">				
			<header class="mb-head cat-nav-head">
				<h1 class="cat-nm cat-nm-science-technology"><a href="<?php echo esc_url( $science_tech_cat_link ); ?>">Science &amp; Tech <span class="button cat-all-button">See All</span></a></h1>
			</header>
		<?php cat_loop('science-and-technology') ?>		
		</div><!-- .end mb-inner -->	
		</article><!-- .end media-box -->
	</section><!-- .end cat-nav-container -->