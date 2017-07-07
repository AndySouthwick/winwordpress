<?/**
 * Template Name: page Template
 *
 * @package swickDevMedia
 * @subpackage swickDevMedia
 * @since 2017
 */
get_head();

?>

                    	
                    	<div class="container">
                            <div class="row">
                           <?php if ( have_posts() ) : while ( have_posts() ) : 
                           the_title( );
                           the_post(); ?>

<?php endwhile; endif; ?>
						
                            </div>
                        </div>
                       



<?php 
get_footer();