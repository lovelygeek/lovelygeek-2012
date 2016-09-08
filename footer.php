		</div><!--wrapper-->
		<footer role="contentinfo">
			<div class="wrapper">
			<section id="subfooter">
				<article class="bucket twitter">
					<h3>Latest Tweets</h3>
					<?php include_once(ABSPATH . WPINC . '/rss.php');
					wp_rss('http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=lovelygeek', 2); ?>
				</article>
				
				<article class="bucket">
					<h3>Dribbble Projects</h3>
					<?php do_action('wp_dribbble'); ?>
				</article>
				
				<article class="bucket delicious">
					<h3>Delicious Bookmarks</h3>
					<?php include_once(ABSPATH . WPINC . '/rss.php');
					wp_rss('http://delicious.com/v2/rss/darthcena', 3); ?>
				</article>
				</div>								
			</section><!--subfooter-->
			
			<section id="credit">
				<p>&copy; Cristina Robinson 2009-<?php echo date('Y'); ?>. All rights reserved. <a href="http://qbee.lovelygeek.net/" title="my quilting bee quilt" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/qbee.png" alt="quilting bee quilt" class="middle" /></a></p>
			</section>		
		
					
		</footer> <!-- end footer -->
		
		</div> <!-- end #container -->

		<!--EDIT FUNCTIONS.PHP FOR GOOGLE ANALYTICS-->
		
		<!-- Place all scripts here, with the scripts.js file last. Scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider.js"></script>
		
		
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>
</html>