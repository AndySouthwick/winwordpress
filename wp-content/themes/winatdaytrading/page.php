<?/**
 * Template Name: page Template
 *
 * @package swickDevMedia
 * @subpackage swickDevMedia
 * @since 2017
 */
get_header();

?>

                    	
                    	<div class="container">
                          
 <?php while ( have_posts() ) : the_post(); ?>
                    	<? the_title('<h3>', '</h3>'); ?>
                          <p> <?php  the_content(); ?></p>
                        <?php endwhile; ?>

                        
                        </div>
                       



<?php 
get_footer();