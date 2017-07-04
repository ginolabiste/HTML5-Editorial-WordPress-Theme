		<?php get_header(); ?>
			<section>
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
			
						get_template_part( 'content-single', get_post_format() );

						if ( comments_open() || get_comments_number() ) :
		  					comments_template();
						endif;

					endwhile; endif; 
				?>
			</section>

		</div>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>