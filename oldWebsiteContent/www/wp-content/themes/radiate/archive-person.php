<?php
/**
 * @package KHK_Directory
 * @version 1.0
 */
/**
 * The template for members archive of KHK.
 */

get_header(); ?>

	<section id="primary" class="content-area people">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :  ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php echo ucfirst($_GET["status"]); ?> Directory
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); $i++; ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', "person" );
					?>

			<?php endwhile; ?>
			
			<?php radiate_paging_nav(); ?>

		<?php else : ?>

			No pledges yet this semester.
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		<?php endif; ?>
		<div style="clear:both"></div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
