<span class="image fit"><?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}
?>
</span>

<h2 class="blog-post-title"><?php the_title(); ?></h2>
<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

<p><?php the_content(); ?></p>
