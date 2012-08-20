<?php
/*
Template Name: Home
*/
?>

<?php include("header.php"); ?>

<div class="g3">
  <div id="homevideo">
    <div class="vendor">
            <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=119, 'homepagevideo', true); ?>
      </div>
    </div>
</div>

<div class="g3">
 <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=120, 'eventbrite_url', true); ?>" target="_blank">
    <div class="reg-button">
      register now&nbsp;<span class="icon">-</span>
    </div></a>
</div>
  
  <div class="g3">
    <h2 class="vision">our vision <span class="icon">M</span></h2>
    <p class="headline"><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'vision', true); ?></p>
  </div>


  <div class="g3-speakers">
    
  <div class="g-half">
    <h2>speakers + bands <span class="icon">O</span></h2>
    <p class="second"><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'speakers_bands_home', true); ?></p>
  </div>    

  <div class="g-half">
    <h2>workshops <span class="icon">@</span></h2>
    <p class="second"><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'workshops_home', true); ?></p>
  </div>
  </div>
  
  <div class="cf"></div>

  <div class="g1">
    <h2>outreach <span class="icon">9</span></h2>
    <p><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'outreach_home', true); ?></p>
  </div>

  <div class="g1">
    <h2>travel + hotel <span class="icon">J</span></h2>
    <p><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'travel_and_hotel_home', true); ?></p>
  </div>

  <div class="g1">
    <h2>cost <span class="icon">C</span></h2>
    <p><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=122, 'cost_home', true); ?></p>
  </div>

  <div class="cf"></div>

  <div class="g3">
   <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=120, 'eventbrite_url', true); ?>" target="_blank">
      <div class="reg-button">
        register now&nbsp;<span class="icon">-</span>
      </div></a>
  </div>

<?php include("footer.php"); ?>