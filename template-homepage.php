<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<div class="home-wrap clearfix">
	<?php
//	// Loop through homepage modules and get their corresponding files
//	// See your theme's includes folder for editing these modules
//    global $smof_data;
//    $homepage_modules = $smof_data['homepage_blocks']['enabled'];
//    if ($homepage_modules):
//		// Loop through each module
//    	foreach ($homepage_modules as $key=>$value) :
//			$value = preg_replace('/\s*/', '', $value); // remove white spaces
//			$value = strtolower($value); // lowercase
//    		get_template_part('includes/home', $value); // get correct file for each module
//   		endforeach;
//	endif;
	?>
	<?php
	$args = array(
		'posts_per_page'   => 5,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'           => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	);
	$posts_array = get_posts( $args );
	foreach ( $posts_array as $post ) {
		?>
		<p><?php the_title(); ?></p>
		<?php
	}
	?>


</div><!-- END home-wrap -->

<?php get_footer(); ?>