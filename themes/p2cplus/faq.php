<?php
/*
Template Name: FAQ
*/
?>

<?php include("header.php"); ?>

  <div class="g3">
      <h2 class="vision">Most Frequently Asked Questions <span class="icon">_</span></h2>
    </div>


    <div class="g3">
      <dl id="accordion">
        <?php query_posts('post_type=faq&posts_per_page=-1');
            if (have_posts()) : while (have_posts()) : the_post();?>
            <dt><a href=""><?php the_title();?></a></dt>
            <?php
                global $more;
                $more = 0;
                echo '<dd>';
                the_content();                 
                echo '</dd>';
                endwhile; endif;
                // Reset Query
                wp_reset_query();
            ?>
            </div>
          </div>

        <div class="cf"></div>

        <div class="g3">
         <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=120, 'eventbrite_url', true); ?>" target="_blank">
            <div class="reg-button">
              register now&nbsp;<span class="icon">-</span>
            </div></a>
        </div>
    
    </div>

<?php include("footer.php"); ?>
