<?php get_header(); ?>
<section id="main">
	<section id="articles_list">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
				<div class="date"><?php the_date(); ?>
				<?php if(has_category()){ ?> 
				en <span><?php the_category(); ?></span></div>
				<?php } ?>
				<?php if(has_excerpt()){ ?>
				<div class="extract"><?php the_excerpt(); ?></div>
				<?php }?>
				<div class="thumb_wide"><img src="" alt="">
					<?php if(has_post_thumbnail()) { the_post_thumbnail('list_articles_thumbs'); } ?>
				</div>
				<div class="extract"><?php the_content(); ?></div>
		<?php endwhile; else: ?>
		<article>
		<img class="thumb" src="<?php bloginfo('template_url'); ?>/img/sorry.png" />
		<hgroup><h2>Oops! No hay artículos</h2></hgroup>
		<p class="extract">No sé cómo has llegado hasta aquí, pero no hay nada que mostrar</p>
		<?php endif; ?>
				<section id="comentarios">
					<h2>Comentarios</h2>
					<div id="caja_comentarios">
						<?php comments_template(); ?>
					</div>
				</section>
			</article>
	</section>

	<?php get_sidebar(); ?>

	</section>

	<?php get_footer(); ?>