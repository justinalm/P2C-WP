<?php
/**
 * The template for displaying content in the single-opportunities.php template
 *
 * @package WordPress
 * @subpackage P2C Plus
 * @since P2C Plus 1.0
 */
?>
    
		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
		<h3><?php the_title(); ?></h3>
		<h4><?php echo get_post_meta($post->ID, 'location-specifics', true);?></h4>
		<?php the_content(); ?>
		<div class="social-buttons">
    <ul class="socs">
       <a href="#"><li>Share <span class="icon" id="social-buttons">l</span></li></a>
       <a href="#"><li>Tweet <span class="icon" id="social-buttons">t</span></li></a>         
    </ul>
    </div>
    
    <div class="cf"></div>