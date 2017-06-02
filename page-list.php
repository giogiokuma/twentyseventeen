<?php
/*
Template Name: 「おかいこさん」人気投票
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php 

query_posts( 'showposts=20' ); 

$loop = new WP_Query( array( 'posts_per_page' => 100, 'post_type' => 'post' ) ); 

  while ($loop->have_posts()) : $loop->the_post(); 
    the_content(); 
  endwhile;


wp_reset_postdata(); 
?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
