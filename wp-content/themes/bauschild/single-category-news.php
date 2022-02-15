<?php 
/**
* Template Name: Template Kategorie News
* Template Post Type: news
* Template für  Post Type "News"
*/

get_header(); ?>
	
<main class="content">
	
	<section class="container">

		<article class="article-standardpost container--white" <?php post_class(); ?> >
			
			<div class="columns">
											
				<div class="column is-two-fifths">
							
					<div class="column">
							
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large', ['class' => 'article--thumb']); ?></a>
						<?php else : ?>
							<a href="<?php the_permalink() ?>"><img src="/wp-content/themes/glamur/assets/img/Platzhalter-Bild.jpg" width="240" height="240" alt="" class="attachment-thumbnail" /></a>
							<?php endif; ?>
							
					</div>
							
				</div>
						
				<div class="post-content is-three-fifths column">
							
					<?php the_content(); ?>						
							
				</div>
						
			</div>	
		</article>
		
	</section>
	
</main>
	
<?php get_footer(); ?>