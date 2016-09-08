	
		<aside class="widget search-widget">
			<form class="searchform all-sites" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
				<div id="search">
					<div id="searchbox">
					<input type="text" class="field s" name="s" id="s"  />
					<input type="hidden" name="site" value="ag_collection" />
					<input type="hidden" name="output" value="xml_no_dtd" />
					<input type="hidden" name="client" value="ag_frontend" />
					<input type="hidden" name="proxystylesheet" value="ag_frontend" />
					</div>
				</div>
				
			</form>
		</aside>
		
		<aside class="widget sort-drops">
		<div class="sort-drops-container">		
		<form action="<?php bloginfo('url'); ?>/" method="get">
		<div>
		<?php $args = array(
			    'show_option_none'   => 'Show by category',
			    'orderby'            => 'name', 
			    'order'              => 'ASC',
			    'show_count'         => 0,
			    'hide_empty'         => 1,
			    'exclude'            => '60,1,3,46,47,48,49,50,51,5,8,11,16,25,27,28,29,30,31,32,33,41,42,44,342,79,80,94,6,116,121,123,128,26,96,99,100,101,102,111',
			    'echo'               => 0 );
			$select = wp_dropdown_categories($args);
			$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
			echo $select;
		?>
		<noscript><div><input type="submit" value="View" /></div></noscript>
		</div>
		</form>

		<form action="<?php bloginfo('url'); ?>/" method="get">
		<div>
			<?php custom_taxonomy_dropdown('agency_category', 'date', 'ASC', '5', 'agency_category', 'Show by agency'); ?>
			
		<noscript><div><input type="submit" value="View" /></div></noscript>
		</div></form>
		<ul class="nav-footer">
			<li class="nav-footer-item"><a class="button archives-button" href="<?php bloginfo('url'); ?>/articles">Article Archives</a></li>			
			<li class="nav-footer-item"><a class="top-button" href="#drop-section-nav">top</a></li>			
		</ul>
						
		</div>
		</aside><!-- /sort-drops -->