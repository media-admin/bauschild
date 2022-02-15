<?php

/**
* Template Name: Kategorie Mietanlagen
*/

get_header(); ?>

	<main class="content container">

		<section class="">

			<?php the_content(); ?>

		</section>


		<section>

			<?php

			 	$args = array(
				 'post_status' => 'publish',
				 'posts_per_page' => -1,
				 'post_type' => 'products',
				 'orderby'   => 'id',
				 'order' => 'ASC',
				 'product-category' => 'mietanlagen',
				);

				$loop = new WP_Query( $args );

				$post_id = "product-category_5";
				$category_color = get_field('produkt-kategorie-farbe', $post_id);

			?>

			<?php $i = 0; // Counter für Spalten-Anzahl // ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<?php
				if($i == 0) {
					echo '<article class="products-article">';
					echo '<div class="columns">';
				}
			?>

				<div class="column">

					<div class="card">

						<div class="card-image">
							<figure class="image">
								<?php the_post_thumbnail('full', ['class' => '']); ?>
							</figure>
						</div>

						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<h2 class="title is-4" <?php echo 'style="background-color: ' . $category_color . '!important;'; ?>; '"'><?php the_title(); ?></h2>
								</div>
							</div>

							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>

					</div>

				</div>

			<?php

				$i++;
				if($i == 2) {
					$i = 0;
					echo '</div>';

					echo '</article>';
				}
			?>

			<?php endwhile; ?>


			<?php
			wp_reset_postdata();
			?>

		</section>

		<?php echo do_shortcode("[content_services]"); ?>

		<?php echo do_shortcode("[content_newslettermotivation]"); ?>

		<?php echo do_shortcode("[content_team]"); ?>

	</main>

<?php get_footer(); ?>