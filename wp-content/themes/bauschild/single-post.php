<?php
/**
* Template Name: Template Kategorie News
* Template Post Type: news
* Template für  Post Type "News"
*/

get_header( 'news' ); ?>

<main class="content container">

	<section class="container">

		<article class="article-standardpost container--white" <?php post_class(); ?> >

			<div class="post-content container">

				<?php the_content(); ?>

			</div>

		</article>

	</section>

</main>

<?php get_footer(); ?>