<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

	$clearer = 0;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Email List -->
<script type="text/javascript">
	jQuery(function($) {
	 	$("#submitemail").click(function(){
	 		var formdata = ($('#emailform').serializeArray());
	 		$(".modal-body").html("Sending...");
	 		$(".step1").attr("disabled", "disabled");
			$.post('/api/subscribe.php', formdata).success(function(data){
				console.log(data);
	 			$(".modal-body").html("You have been added to the KHK Rush Mailing List.");
	 			$(".step1").hide();
	 			$(".step2").show();
			});
	 	});
	});
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Join KHK Rush Mailing List</h4>
      </div>
	      <div class="modal-body">
	  		<form id="emailform" name="emailform" method="POST">
		        Name: <input type="text" name="name" id="name" /><br />
		        Email: <input type="text" name="email" /><br />
		        Major: <input type="text" name="major" /><br />
		        Standing: 
		        <select name="standing">
				  <option value="Freshman">Freshman</option>
				  <option value="Sophomore">Sophomore</option>
				  <option value="Junior">Junior</option>
				  <option value="Senior">Senior</option>
				  <option value="Graduate Student">Graduate Student</option>
				</select>
      		</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default step2" style="display:none" data-dismiss="modal">Done</button>
	        <button type="button" class="btn btn-default step1" type="submit" id="submitemail">Join List</button>
	        <button type="button" class="btn btn-default step1" data-dismiss="modal">Close</button>
	      </div>
    </div>
  </div>
</div>
<!-- End Email List -->
<div id="parallax-bg">	
<?php 
$zeroes = "";
$ones = "";
for ($i=0; $i < 300; $i++) { 
	for ($j=0; $j < 30; $j++) { 
		$zeroes .= str_repeat("&nbsp;",rand(1,30)).rand(0,1);
		$ones .= str_repeat("&nbsp;",rand(1,30)).rand(0,1);
	}
	$zeroes .= "<BR>";
	$ones .= "<BR>";
}
		echo "<div class='fardigit digit'>$zeroes</div>";
		echo "<div class='closedigit digit'>$ones</div>";
	
	?>

</div>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap clearfix">
			<div class="site-branding">
				<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<span class="title1">Kappa Eta Kappa – Delta Chapter</span>
				<span class="title2">KHK – Delta Chapter</span>
				<span class="title3">KHK – Delta</span>
				<span class="title4">KHK</span>
				</a>
				</h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<div class="header-search-icon"></div>
			<?php get_search_form(); ?>	

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'radiate' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->				
		</div><!-- .inner-wrap header-wrap -->
	</header><!-- #masthead -->
	<div class="header-image">
	<img src="<?php echo get_header_image(); ?>">
	</div>
	<div id="content" class="site-content">
		<div class="inner-wrap">