<?php get_header(); ?>
				<!-- Section -->
				<section>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content', 'page' ); 

						endwhile; 
						 endif; ?>
				</section>
			</div>
		</div>
	
	<!-- Sidebar -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
