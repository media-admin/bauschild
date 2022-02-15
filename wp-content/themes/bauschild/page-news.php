<?php 
/**
* Template Name: Seite News
*/

get_header(); ?>
		
	<main class="content">
		
		<section  class="container">
			
			<?php
			 
				 $args = array(  
				 'post_status' => 'publish',
				 'category_name' => 'News',
				 'post_type' => 'post',
				 'posts_per_page' => '-1', 
				 'orderby'   => 'id',
				 'order' => 'ASC',		
				 );
		
			$loop = new WP_Query( $args ); 
				
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<article class="news-article container--white <?php post_class(); ?> ">
					
					<div class="columns">
						
						<div class="is-two-fifths column">
							
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large', ['class' => '']); ?></a>
							<?php else : ?>
								<a href="<?php the_permalink() ?>"><img src="/wp-content/themes/glamur/assets/img/Platzhalter-Bild.jpg" width="240" height="240" alt="" class="attachment-thumbnail" /></a>
							<?php endif; ?>
							
						</div>
						
						<div class="column is-three-fifths post-content">
							<h2 class="post-content__header"><?php the_title();?></h2>
							<?php the_content(); ?>
								
						</div>
							
					</div>
					
				</article>
				
			<?php	
				endwhile;
				wp_reset_postdata(); 	
			?>
			
		</section>
		
	</main>
		
<?php get_footer(); ?>