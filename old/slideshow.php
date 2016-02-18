<div id="no-slide">
	<section id="slideshow">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="slide">
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<img src="" alt="">
						<?php if(has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); } ?>
					</a>
				</div>
				<article>
					<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
					<div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
					<div class="extract"><?php the_excerpt(); ?></div>
				</article>
			</div>
		<?php endwhile; else: ?>
		<p>No hay artículos que mostrar</p>
		<?php endif; ?>
	</section>
</div>