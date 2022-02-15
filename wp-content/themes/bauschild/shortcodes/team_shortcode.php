<section class="team-weiss has-bg-yellow">
	
	<div class="container">
		
		<h2 class="team-weiss__header">Das Team Weiss</h2>
		
		<p class="team-weiss__introduction">
			hat die Zufriedenheit unserer Kunden im gemeinsamen Fokus. Sie ist die Quelle unseres gesunden, kontinuierlichen Wachstums.<br />
			Zufriedene Kunden sind die besten Rückmelder hinsichtlich nötiger Verbesserungen und neuer Wunschprodukte.Qualifizierte „Antreiber“ sozusagen.
		</p>
		
				<?php
				 
				 $args = array(  
					'post_status' => 'publish',
					'posts_per_page' => -1, 
					'post_type' => 'team-members',
					'orderby'   => 'id',
					'order' => 'ASC',				
				);
				
				$loop = new WP_Query( $args ); ?>
				
				<?php $i = 0; // Counter für Spalten-Anzahl // ?>
						
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
					if($i == 0) {
						echo '<div class="team-weiss__overview columns">';
					}
				?>
				
					<div class="team-weiss__data-container column">
						<img class="team-weiss__image" src="<?php the_field('foto_hochformat'); ?>">
						<h2 class="team-weiss__name"><?php the_title(); ?></h2>
						<p class="team-weiss__slogan"><?php the_field('zustaendigkeit'); ?></p>
					</div>
					
				<?php
				
					$i++;
					if($i == 3) {
						$i = 0;
						echo '</div>';
							
					}
				?>	
					
				<?php endwhile; ?>
								
				<?php	
				wp_reset_postdata(); 
				?>
			</div>
		</div>
		
		<p class="team-weiss__credits">
			Nicht im Bild, aber nicht minder wichtig sind unsere Topp-Mitarbeiter in der Produktion sowie im Montage- und Lieferservice.
		</p>
	
	</div>
		
	</section>