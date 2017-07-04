<?php get_header(); ?>
				<!-- Banner -->
					<section id="banner">
						<div class="content">
							<header>
								<h1>Hi, I’m Editorial<br />
								by HTML5 UP</h1>
								<p>A free and fully responsive site template</p>
							</header>
							<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
							<ul class="actions">
								<li><a href="#" class="button big">Learn More</a></li>
							</ul>
						</div>
						<span class="image object">
							<img src="images/pic10.jpg" alt="" />
						</span>
					</section>

				<!-- Section -->
					<section>
						<header class="major">
							<h2>Blog</h2>
						</header>
						<div class="posts">
							<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post();

							get_template_part( 'content', get_post_format() ); 

							endwhile; 
							 endif; 
							?>										
						</div>
					</section>

			</div>
		</div>

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>