<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'radiate' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				if ( 'person' == get_post_type() ) {
				 get_template_part( 'content', 'person' );
				} else {
				 get_template_part( 'content', 'search' ); 
				}		
				 ?>

			<?php endwhile; ?>

			<?php radiate_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

<br />
<br />
<br />
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
