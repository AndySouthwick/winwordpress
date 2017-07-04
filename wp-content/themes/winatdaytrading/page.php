<?/**
 * Template Name: page Template
 *
 * @package swickDevMedia
 * @subpackage swickDevMedia
 * @since 2017
 */
get_header();

?>
<section class="main clear">
                    	
                    	
                        <?php while ( have_posts() ) : the_post(); ?>
                    	<? the_title('<h3>', '</h3>'); ?>
 
                          <p> <?php  the_content(); ?></p>
                        <?php endwhile; ?>
						
                    </section>


<? get_footer(); ?>