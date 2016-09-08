<aside id="narrowCol">

	<?php if (is_page('about')) { ?>
		<h3>What I Do</h3>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/coding.png" alt="code" class="alignleft" /> CODING<br /><small>HTML, CSS, PHP, JavaScript, jQuery</small></p>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/design.png" alt="design" class="alignleft" /> DESIGN<br /><small>Web design, logos, interface</small></p>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/wordpress.png" alt="wordpress" class="alignleft" /> WORDPRESS <br /><small>Design and site build for WordPress</small></p>
		
		<h3>Elsewhere</h3>
		<ul>
		<li><a href="http://interiors.lovelygeek.net" target="_blank">Lovely Interiors</a> - My interior design blog</li>
		<li><a href="http://wedding.lovelygeek.net" target="_blank">Joshua &amp; Cristina</a> - My wedding site</li>
		</ul>
		
		<h3>Colophon</h3>
		This site was built on my lovely 15" <a href="http://apple.com">Apple MacBook Pro</a> using the <a href="http://adobe.com">Adobe</a>&reg; Creative Suite, <a href="http://panic.com/coda/">Coda</a>, <a href="http://panic.com/Transmit/">Transmit</a>, and <a href="http://google.com/chrome">Google Chrome</a>. It is powered by <a href="http://wordpress.org">WordPress</a> and hosted at <a href="http://dreamhost.com">DreamHost</a>.
	<?php } ?>
	
	<?php if (is_page('contact')) { ?>
		<h3>Start a Project</h3>
		If you're interested in starting a project with me, please complete my <a href="http://www.lovelygeek.net/contact/client-questionnaire/">Client Questionnaire</a>. 
		
		<p class="button"><a href="http://www.lovelygeek.net/contact/client-questionnaire/">Client Questionnaire &raquo;</a></p>
		
		<h3>Good Reads</h3>
		<ul>
		<li><a href="http://adamscottcreative.com/10-things-you-need-to-do-before-you-hire-a-web-designer" target="_blank">10 Things You Need To Do Before Hiring a Web Designer</a></li>
		<li><a href="http://adamscottcreative.com/why-professional-website-design-isnt-cheap" target="_blank">Why Professional Website Design Isn't Cheap</a></li>
		</ul>
	
	<?php } ?>


	<?php if (is_home()) { ?>
	
		<h3>Stay Up to Date</h3>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/rss.png" alt="RSS" class="alignleft" /> RSS<br /> <a href="http://feeds.feedburner.com/lovelygeek">Subscribe via your preferred reader</a></p>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/mail.png" alt="Email" class="alignleft" /></a> EMAIL<br /><a href="http://feedburner.google.com/fb/a/mailverify?uri=LovelyGeekDesigns&amp;loc=en_US" target="_blank">Subscribe by email</a></p>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/facebook.png" alt="Facebook" class="alignleft" /> FACEBOOK<br /><a href="http://facebook.com/lovelygeek">"Like" me on Facebook</a></p>
		<p><img src="<?php bloginfo('template_url'); ?>/library/images/twitter.png" alt="Twitter" class="alignleft" /> TWITTER<br /><a href="http://twitter.com/lovelygeek">Follow me on Twitter</a></p>

		
		<h3>Recent Posts</h3>
		<ul>
		 <?php $recent = new WP_Query("showposts=5"); while($recent->have_posts()) : $recent->the_post();?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
		 <?php endwhile; ?>
		</ul>
		
		
		<h3>Categories</h3>
		<ul> <?php wp_list_categories( '&title_li='); ?> </ul>
		
		<h3>Archives</h3>
		<ul><?php wp_get_archives('type=yearly'); ?></ul> 
		
		<h3>Friends</h3>
		<ul><?php wp_list_bookmarks('title_li=&categorize=0&category=18'); ?></ul>
		
	<?php } ?>

	<?php if ((is_single()) or (is_archive())  or (is_search()) or (is_page('archive'))) { ?>
		<h3>Recent Posts</h3>
		<ul>
		 <?php $recent = new WP_Query("showposts=5"); while($recent->have_posts()) : $recent->the_post();?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
		 <?php endwhile; ?>
		</ul>

		<h3>Categories</h3>
		<ul><?php wp_list_categories( '&title_li='); ?></ul>

		<h3>Archives</h3>
		<ul><?php wp_get_archives('type=yearly'); ?></ul> 
	<?php } ?>


</aside><!--sidebar-->