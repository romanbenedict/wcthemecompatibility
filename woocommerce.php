<?php get_header(); ?>
  
	<?php get_template_part('includes/top_info'); ?>
	<div id="content-top"></div>
	<div id="content" class="clearfix">
		<div id="content-area">
	<?php 	woocommerce_content(); ?>
		</div> <!-- end #content-area -->
	
		<?php get_sidebar(); ?>
	</div> <!--end #content-->
<?php get_footer(); ?>
