<article>
	<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail( array( 380, 182 ) ); ?></a>
	<h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="row">
			<div class="col-md-8">
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php } else { ?>
	<p><?php the_excerpt(); ?></p>
	<?php } ?>
	<ul class="actions">
		<li><a href="<?php the_permalink(); ?>" class="button">More</a></li>
	</ul>
</article>