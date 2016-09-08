<?php /* Template Name: Sitemap Page */ ?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
			<div id="main" class="eightcol clearfix" role="main">
			
				<article id="post-not-found" class="clearfix">
				
					<h1>Lovely Geek Sitemap</h1>
					
					<section class="post-content">
								
						<h3>Pages</h3>  
						<ul><?php wp_list_pages("title_li=" ); ?></ul>
	
						<h3>Feeds</h3>  
						<ul>  
						<li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Main RSS</a></li>  
						<li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>  
						</ul> 
						 
						<h3>Categories</h3>  
						<ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
						
						<h3>Archives</h3>  
						<ul><?php wp_get_archives('type=yearly'); ?></ul>   
						
					</section> <!-- end article section -->
						
				</article> <!-- end article -->
					
			</div> <!-- end #main -->
					
		</div> <!-- end #inner-content -->
    
	</div> <!-- end #content -->

<?php get_footer(); ?>