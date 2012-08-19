<?php
/*
Template Name: Schedule
*/
?>

<?php include("header.php"); ?>

  <div class="g3">
      <h2 class="vision">schedule <span class="icon">P</span></h2>
  </div>

  <div class="cf"></div>
  
  <div class="g3">
    <div class="schedule-container">
      <?php query_posts('post_type=schedule&posts_per_page=1');
          if (have_posts()) : while (have_posts()) : the_post();?>
          <div class="cf"></div>
          <?php
              global $more;
              $more = 0;

              the_content();                 
              echo '</div>';
              endwhile; endif;
              // Reset Query
              wp_reset_query();
          ?>
        </div>
      </div>
    </div>
      
    <div class="cf"></div>

    <div class="g3">
      <a href="http://www.eventbrite.com" target="_blank">
         <div class="reg-button">
           register now&nbsp;<span class="icon">-</span>
         </div></a>
     </div>

<?php include("footer.php"); ?>
