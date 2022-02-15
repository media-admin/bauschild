<section class="unsere-produkte">
	
	<div class="container">
		
		<h2 class="unsere-produkte__header"></h2>
		
		<?php
		
		// Taxonomy Loop
		
		/** 
		 *  Get the Custom Taxonomy
		 *  For a list of other parameters to pass in see link below
		 *  @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
		 *  For a list of get_term return values see link below
		 *  @link https://codex.wordpress.org/Function_Reference/get_term
		 * 
		 */ 
		$terms = get_terms( array(
			'taxonomy'   => 'product-category', // Swap in your custom taxonomy name
			'hide_empty' => true, 
		));
		
		?>
			
		<section class="<?php $term->name ?>">
			
			<?php $i = 0; // Counter für Spalten-Anzahl // ?> 
			 
			<?php foreach( $terms as $term ) { ?>
								
			<?php
				if($i == 0) {
					echo '<article class="products-article">';
					echo '<div class="columns">';
				}
			?>
			
				<div class="column">
					
					<div class="card">
						
						<?php echo '<a href="'. get_term_link( $term ) .'">' ?>
						
						<?php
						
							$image_id = get_field('produkt-kategorie-bild', $term, false); // 3rd arg set to false to ensure we get unformatted value (ID)
							$image = wp_get_attachment_image_src($image_id, 'full');	
							
							$color = get_field('produkt-kategorie-farbe', $term);
						
						?>														
						
						<div class="card-image">
							<figure class="image">
					
							<img class="is-background hero" src="<?php echo $image[0]; ?>" />
	
							</figure>
						</div>
						
						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<h2 class="title is-4" style="background-color:<?php echo $color; ?>"><?php echo $term->name; ?></h2>
								</div>
							</div>
							
							<div class="content">
								<p class=""><?php echo $term->description; ?></p>
							</div>

							
						</div>
						
					</a>
						
					</div>
					
				</div>
									
			<?php
				
				$i++;
				if($i == 2) {
					$i = 0;
					echo '</div>';
						
					echo '</article>';
				}
				
			}	
			?>
		
	</div>	
		
</section>