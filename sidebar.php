					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<?php wp_list_pages( '&title_li=' ); ?>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Updates</h2>
									</header>
									<div class="mini-posts">
										<?php 
											$args = array(
												'post_type' => 'my-custom-updates',
												'orderby' => 'menu_order',
												'order' => 'ASC'
											);

											$custom_query = new WP_Query( $args );
											while ( $custom_query->have_posts() ) : $custom_query->the_post();
										?>
												<article>
													<a href="<?php the_permalink(); ?>" class="image fit"><?php the_post_thumbnail(); ?></a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
													<?php the_excerpt(); ?>
												</article>
												<ul class="actions">
													<li><a href="<?php the_permalink(); ?>" class="button">More</a></li>
												</ul>
										<?php 
											endwhile;
										?>
										</div>
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="mailto:<?php echo get_option( 'site_email' );?>"><?php echo get_option( 'site_email' );?></a></li>
										<li class="fa-phone"><?php echo get_option( 'site_phone' );?></li>
										<li class="fa-home"><?php echo get_option( 'site_address' );?></li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Gino Labiste. All rights reserved. <br>&copy; Design: <a href="https://html5up.net" target="_blank">HTML5 UP</a>.</p>
								</footer>
						</div>
					</div>