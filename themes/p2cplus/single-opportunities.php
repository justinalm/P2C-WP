<?php include("header.php"); ?>

<div class="g-half" style="margin: 0;">
  <div class="g3">
    <h2>opportunity <span class="icon">$</span></h2>
  </div>
  
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single-opportunities' ); ?>

				<?php endwhile; // end of the loop. ?>
				</div>
				<div class="g3">
				<p><?php previous_post_link(); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php next_post_link(); ?></p>
				</div>
		   <div class="cf"></div>
  </div>
  
<?php include("footer.php"); ?>
