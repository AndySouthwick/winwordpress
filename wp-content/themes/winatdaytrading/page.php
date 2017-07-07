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
                                 <?
                           the_title( );?>
                           </div>
                           <div class="row">
                                <? the_post(); ?>
                           </div>
                         

<?php endwhile; endif; ?>
						
                            </div>
                        </div>
                       



<?php 
get_footer();