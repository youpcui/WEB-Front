<?php
/** 
* @package WordPress 
Template Name: blogpage 
*/
get_header();
get_template_part('index','banner'); ?>
<!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="<?php appointment_post_layout_class(); ?>" >
			<?php if( $post->post_content != "" )
			{ ?>
			<div class="blog-lg-area-left">
			<?php if( have_posts()) :  the_post();
			the_content(); 
			endif; ?>
			</div>


<!--?php
	$previous_year = $year = 0;
	$previous_month = $month = 0;
	$ul_open = false;

	$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
?>

<?php foreach($myposts as $post) : ?>

<?php
	setup_postdata($post);
	$year = mysql2date('Y', $post->post_date);
	$month = mysql2date('n', $post->post_date);
	$day = mysql2date('j', $post->post_date);
?>

<?php if($year != $previous_year || $month != $previous_month) : ?>

<?php if($ul_open == true) : ?>
<?php endif; ?>

	<h3><?php the_time('Y F'); ?></h3>
	<ul>
<?php $ul_open = true; ?>
<?php endif; ?>
<?php $previous_year = $year; $previous_month = $month; ?>

<li><span><?php the_time('Y/m/d'); ?></span> <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span> <span>&nbsp;<?php if(function_exists('the_views')) { the_views(); } ?></span> <?php comments_popup_link( __( 'Comments (0)', 'farlee' ), __( 'Comments (1)', 'farlee' ), __( 'Comments (%)', 'farlee' ), 'comments-link', __('Comments closed', 'farlee')); ?> </li>

<?php endforeach; ?>
</ul-->



<div class="row">
		<?php
		
		$cat_id = array();
		$cat_id = $news_setting['blog_selected_category_id'];
		$no_of_post = $news_setting['post_display_count'];	

		 $args = array( 'post_type' => 'post','ignore_sticky_posts' => 1 , 'category__in' => $cat_id, 'posts_per_page' => $no_of_post);
		 $news_query = new WP_Query($args);	
		 

		 $i=1;
			while($news_query->have_posts() ) : $news_query->the_post();				
			?>
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
							<?php $defalt_arg =array('class' => "img-responsive"); ?>
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('', $defalt_arg); ?>
							<?php endif; ?>
						</div>
						<div class="media-body">
							<?php $appointment_options=theme_setup_data();
							  $news_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
							if($news_setting['home_meta_section_settings'] == '' ) { ?>	
							<div class="blog-post-sm">
								<?php _e('By','appointment');?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php echo get_the_author();?></a>
								<a href="<?php echo get_month_link(get_post_time('Y'),get_post_time('m')); ?>">
								<?php echo get_the_date('M j, Y'); ?></a>
								<?php 	$tag_list = get_the_tag_list();
								if(!empty($tag_list)) ?>
								<div class="blog-tags-sm"><?php the_tags('', ', ', ''); ?></div>
							</div>
							<?php } ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_home_blog_excerpt(); ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php 
			  if($i==2)
			  { 
			     echo '<div class="clearfix"></div>';
				 $i=0;
			  }$i++;
			  wp_reset_postdata();
			endwhile;  ?>
		</div>







			<?php } comments_template( '', true ); // show comments ?>
			</div>
			<!-- /Blog Area -->			
			<!--Sidebar Area-->
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
			<!--Sidebar Area-->
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>
