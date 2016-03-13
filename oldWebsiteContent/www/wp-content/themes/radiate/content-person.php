<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

global $clearer;
$clearer++;
$classes = get_post_class();
if ($clearer % 3 == 0 || $clearer % 3 == 2){
	array_push($classes,"even");
}
$classes = join(" ",$classes);
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $classes; ?>">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
<?php
if (!function_exists("output")){
function safe_email($email){
  $bademail = str_replace("@"," [at] ",$email);
  $emailid = rand(0,1000000000000);
  $data = "<a href='#' id='email$emailid'>$bademail</a>";
  $data .= '<script type="text/javascript">';
  $jsemail = substr($email, 0, 4).'" + "'.substr($email, 4);
  $data .= 'jQuery("#email'.$emailid.'").html("'.$jsemail.'").attr("href","mailto:'.$jsemail.'")';
  $data .= '</script>';
  return $data;
};
function output($var){
	if (get_scpt_formatted_meta($var)){
		$value = get_scpt_formatted_meta($var);
		if ($var == "E-Mail"){
			$value = safe_email($value);
		}
		echo "<dt>$var</dt>";
		echo "<dd>".$value."</dd>";
		}
	}
}
?>
	<div class="entry-content">
		<?php the_post_thumbnail("thumbnail"); ?>
		<br>
		<br>
		<div class="bio">
		<dl>
		 <?php output("Major"); ?>
         <?php output("Graduating Class"); ?>
         <?php output("E-Mail"); ?>
         <?php output("Web Site"); ?>
         <?php output("Home Town"); ?>
         <?php output("Birthday"); ?>
         <?php output("Current Office(s) Held"); ?>
         <?php output("Past Office(s) Held"); ?>
         <?php output("Interests"); ?>
         <?php output("Goals"); ?>
         <?php output("Best Things about KHK"); ?>
		</dl>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'radiate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'radiate' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
<?php 
if ($clearer % 3 == 0) {
	echo "<div style='clear:both'></div>";
}
?>