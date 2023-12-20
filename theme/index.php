<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscore_TW
 */

get_header();
?>
<section class="w-full flex flex-col items-center justify-center bg-gray-200 p-8 gap-6 my-4">
	<h1 class="text-orange-300 text-7xl">[ index.php ]</h1>
	<p class="text-purple-500 text-xl text-center max-w-[600px]">This is a test section for Tailwindcss. The _tw generator creates a WordPress starter theme optimized for modern development with Tailwind CSS, Tailwind Typography and the WordPress editor.It's the fastest and easiest way to use Tailwind with WordPress!</p>
	<div class="bg-gray-400 rounded w-full max-w-[800px]">
		<div class="bg-blue-500 h-2 rounded" style="width: 50%;"></div>
	</div>
</section>

	<section id="primary">
		<main id="main">

		<?php
		if ( have_posts() ) {

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header><!-- .entry-header -->
				<?php
			endif;

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			underscore_tw_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
