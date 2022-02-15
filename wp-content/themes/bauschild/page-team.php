<?php 

/**
* Template Name: Seite Team
*/

get_header(); ?>
	  
	<main class="content">
		
		<section class="container">
		
			<?php the_content(); ?>
		
		</section>
		
			
		<section class="team-members container">
		
			<?php
			 
			 $args = array(  
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'post_type' => 'team-members',
				'orderby'   => 'id',
				'order' => 'ASC'			
			);
			
			$loop = new WP_Query( $args ); ?>
			
			<?php $i = 0; // Counter für Spalten-Anzahl // ?>
					
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<div class="team-member columns">
					
					<div class="team-member__image-container column">
						<img class="team-member__image" src="<?php the_field('foto_panorama'); ?>"
							alt="Portraitfoto von <?php the_title(); ?>"
							srcset="<?php the_field('foto_hochformat'); ?> 50w, 
										  <?php the_field('foto_panorama'); ?> 1920w" 
							sizes="(min-width: 60em) 50vw, 
											100vw"
						>
						
					</div>
					
					<div class="team-member__data column">
						<h2 class="team-member__name"><?php the_title(); ?></h2>
						<p class="team-member__slogan"><?php the_field('zustaendigkeit'); ?></p>
						<p class="team-member__description"><?php the_content(); ?></p>
						<p class="team-member__phone"><a href="#"><?php the_field('telefonnummer'); ?></a></p>
						<p class="team-member__mail"><a href="#"><?php the_field('e-mail-adresse'); ?></a></p>
					</div>
				</div>
				
			<?php endwhile; ?>
				
	
			<?php	
			wp_reset_postdata(); 
			?>
			
		</section>
		
		<?php echo do_shortcode("[content_services]"); ?>
		
		<?php echo do_shortcode("[content_newslettermotivation]"); ?>
		
		<?php echo do_shortcode("[content_products]"); ?>
		
		<?php echo do_shortcode("[content_maps]"); ?>
		
	</main>
		
<?php get_footer(); ?>