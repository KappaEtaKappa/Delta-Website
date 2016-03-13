<?php
/**
 * The template file to show the front page display.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); 
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
?>

	<?php
	$page_array = array( get_theme_mod( 'page-setting-one' ), get_theme_mod( 'page-setting-two' ), get_theme_mod( 'page-setting-three' ) );
	$get_featured_pages = new WP_Query( array(
				'posts_per_page' 			=> 3,
				'post_type'					=> array( 'page' ),
				'post__in'		 			=> $page_array,
				'orderby' 		 			=> 'post__in',
				'ignore_sticky_posts' 	=> 1 					
			));
	?><!-- Button trigger modal -->

<!-- Modal -->
	<div id="featured_pages" class="clearfix">
		<div class="tg-one-third tg-row1">				
			<div class="page_text_container">
				<h1 class="entry-title">About KHK</h1>
				<p>
				The Delta chapter of KHK is a professional, co-ed ECE/CS fraternity at the University of Wisconsin-Madison.
				Founded in 1924, the fraternity provides an atmosphere for engineering students to meet fellow classmates,
				study in groups, and make professional connections.
				</p>
				<!-- <a class="more-link" href="#"><?php _e( 'Read more','radiate' ); ?></a> -->
			</div>				
		</div>
		<div class="tg-one-third tg-row1">				
			<div class="page_text_container">
				<h1 class="entry-title">Rush KHK</h1>
				<p>
				Every semester, we host a series of open-house events with FREE FOOD.
				Please check the calendar for times and locations.
				</p>
				<!-- Form in header.php, email is sent with /api/subscribe.php -->
				<button data-toggle="modal" data-target="#myModal">
					Join Rush Mailing List
				</button>
			</div>					
		</div>
		<div class="tg-one-third tg-row1  tg-one-third-last">				
			<div class="page_text_container">
				<h1 class="entry-title">Officers - Spring 2015</h1>
				<p><strong>President:</strong> Antonio Beattie<br>
				<strong>Vice President:</strong> Reid Beatty<br>
				<strong>Treasurer:</strong> Maggie White<br>
				<strong>Secretary:</strong> Dan Konen<br>
				<strong>Pledge Trainer:</strong> Jack Heinzelmann</p>
			</div>					
		</div>
	</div>
	<div id="featured_pages" class="clearfix">
		<div class="tg-one-third tg-row2">				
			<div class="page_text_container">
				<h1 class="entry-title">Contact Us</h1>
				<p><?php echo safe_email("khk@cae.wisc.edu"); ?><br>
				(608) 251-7KHK<br>
				114 N. Orchard St.<br>
				Madison, WI 53715<br><br>
				<iframe width="248" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=delta+kappa+eta+kappa&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=59.119059,108.544922&amp;ie=UTF8&amp;hq=delta+kappa+eta+kappa&amp;hnear=&amp;cid=8910202859036959991&amp;ll=43.070424,-89.407468&amp;spn=0.007838,0.0106&amp;z=15&amp;output=embed"></iframe><p>
				<a href="http://maps.google.com/maps/place?q=delta+kappa+eta+kappa&amp;hl=en&amp;cid=8910202859036959991">Find us on Google Maps</a></p>
			</div>
		</div>
		<div class="tg-one-third tg-row2">				
			<div class="page_text_container">
				<h1 class="entry-title">Rush Events Calendar</h1>
				<p>
				<iframe src="https://www.google.com/calendar/b/0/embed?showTitle=-&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=khkdelta%40gmail.com&amp;color=%2342104A&amp;ctz=America%2FChicago" style=" border:solid 1px #777 " width="248" height="265" frameborder="0" scrolling="no"></iframe>
				</p>
			</div>					
		</div>
		<div class="tg-one-third tg-row2  tg-one-third-last">				
			<div class="page_text_container">
				<h1 class="entry-title">Alumni Association</h1>
				<p>
					The DAA is dedicated to providing support to the active chapter,
					 and providing alumni will the latest news about our fraternity.
					 <br /><br />
					<a href="http://daa.khk.org">DAA Website</a>
				</p>
			</div>					
		</div>
	</div>
			

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
