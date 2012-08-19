<?php
/*
Template Name: Workshops
*/
?>

<?php include("header.php"); ?>

    <div class="g3">
      <h2 class="vision">workshops <span class="icon">@</span></h2>
      <p class="headline"><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=86, 'workshop-tease', true); ?></p>
    </div>

    <div class="cf"></div>
    
        <?php query_posts('post_type=workshops&posts_per_page=-1');
                       if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
                       <div class="g1">
                       <h3><?php the_title();?></h3>
                       <h4><?php echo get_post_meta($post->ID, 'who_when_where', true);?></h4>
                       <div class="profilepic"><?php echo the_post_thumbnail( 'small' );?></div>        
                       <?php
                           global $more;
                           $more = 0;
                           the_excerpt();               
                           echo '</div>';   
                           if ( 0 == $count%3 ) {
                                 echo '<div class="cf"></div>';
                             }
                         endwhile; endif; //ending the loop
                         if ( 0 != $count%3 ) {
                            echo '<div class="cf"></div>';
                         } 
                         wp_reset_query();
                         ?>
        
  
    <div class="g3">
     <a href="http://www.eventbrite.com" target="_blank">
        <div class="reg-button">
          register now&nbsp;<span class="icon">-</span>
        </div></a>
    </div>
    
  </div><!-- End of wrapper -->

<?php include("footer.php"); ?>
