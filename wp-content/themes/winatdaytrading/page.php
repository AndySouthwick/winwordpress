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
                          
                           <?php if ( have_posts() ) : while ( have_posts() ) : ?>
                             <div class="row">
                                <h1><?php the_title( );?></h1> 
                           </div>
                           <div class="row">
                                <?php the_post(); ?>
                           </div>
                         

<?php endwhile; endif; ?>
						
                            </div>
                        </div>
                       



<?php 
get_footer();