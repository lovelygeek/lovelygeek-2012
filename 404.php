<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
			<div id="main" class="eightcol clearfix" role="main">
			
				<article id="post-not-found" class="clearfix">
				
					<h1>Epic 404 - Page Not Found</h1>
					

					<section class="post-content">
						<p>Uh oh! We cannot seem to find what you were looking for.</p>
						
						<p><a href="http://www.flickr.com/photos/st3f4n/3951143570/" title="The droids we're googling for by StŽfan, on Flickr" target="_blank"><img src="http://farm3.staticflickr.com/2465/3951143570_20b4eccd3f_n.jpg" width="320" height="213" alt="The droids we're googling for"></a></p>
								
						<p> Maybe we can still help you.</p>
			
						<ul>
						<li>You can search our site using the form provided below.</li>
						<li>You can visit <a href="<?php bloginfo('url'); ?>/">the homepage</a></li>
						<li>Or you can visit <a href="<?php bloginfo('url'); ?>/sitemap">the sitemap</a></li>
						</ul>
			
						<h2>Search Lovely Geek</h2>
						<?php get_search_form(); ?>
						
					</section> <!-- end article section -->
						
				</article> <!-- end article -->
					
			</div> <!-- end #main -->
					
		</div> <!-- end #inner-content -->
    
	</div> <!-- end #content -->

<?php get_footer(); ?>