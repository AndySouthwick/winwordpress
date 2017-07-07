<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<?php wp_head(); ?>
 
  <?function my_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  
  // open the <ul>, set 'menu_class' and 'menu_id' values
  
  $wrap  =  '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s';
          
              $wrap  .='<li class=menu-item menu-item-type-post_type menu-item-object-page nav-item">
            <a href="#faqsection" class="nav-link">FAQ</a>
            </li>';
            

           $wrap .= '</ul>';
  
  // get nav items as configured in /wp-admin/
  // return the result
  return $wrap;
  
  
}
?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-toggleable-md navbar-default bg-default fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><img src="/wp-content/uploads/2017/07/winlogo-e1499103518219.png" alt=""> At Day Trading</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
      wp_nav_menu( array(
        'theme_location'		=> 'navbar',
        'container'         => false,
        'menu_class'				=> '',
        'fallback_cb'				=> '__return_false',
      	'items_wrap'				=> my_nav_wrap(),
        'depth'							=> 2,
				'walker'            => new b4st_walker_nav_menu(),
      ) );
    ?>
		<?php get_template_part('navbar-search'); ?>
  </div>
</nav>
