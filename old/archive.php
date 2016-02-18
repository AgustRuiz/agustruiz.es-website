<?php get_header(); ?>

<section id="main">
	<section id="articles_list">

		<h2 id="cat_name"><?php single_cat_title($prefix="", $display=true); ?></h2> 

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<!-- <img class="thumb" src="http://lorempixel.com/450/370" alt="Imagen aleatoria" /> -->
				<div class="thumb"><a href="<?php the_permalink(); ?>"><img src="" alt="">
					<?php if(has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); } ?>
				</a></div>
				<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
				<div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
				<div class="extract"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; else: ?>
		<article>
		<img class="thumb" src="<?php bloginfo('template_url'); ?>/img/sorry.png" />
		<hgroup><h2>Oops! No hay artículos</h2></hgroup>
		<p class="extract">No sé cómo has llegado hasta aquí, pero no hay nada que mostrar</p>
		</article>
		<?php endif; ?>

		<div id="pagination">
			<?php next_posts_link('Post Siguientes >'); ?>
			<?php previous_posts_link('< Post Anteriores'); ?>
		</div>
	</section>

	<?php get_sidebar(); ?>

	</section>

	<?php get_footer(); ?>