  </div><!-- End of the wrapper -->

  <footer>

    <div id="footer-container"><!-- Begin the Footer Container -->

      <div class="g1">
        <h4 class="footer-header">useful links</h4>
      </div>
      <div class="cf"></div>

      <div class="g1-footer">

        <ul class="footer">
        <a href="/plus/faq/"><li>Got questions? Read the FAQ<span class="icon" id="small">_</span></li></a>
        <a href="/plus/resourcespromote/"><li>resources / promote<span class="icon" id="small">?</span></li></a>
        <a href="/plus/schedule/"><li>schedule<span class="icon" id="small">P</span></li></a>
        <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=124, 'conference1_link', true); ?>"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=124, 'conference1_name', true); ?><span class="icon" id="small">0</span></li></a>
        <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=124, 'conference_french_link', true); ?>"><li><?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=124, 'conference_french_name', true); ?><span class="icon" id="small">&oacute;</span></li></a>
        <a href="#top"><li>Take me to the top<span class="icon" id="small">&igrave;</span></li></a>
        </ul>
        
        <br/>
      </div>
      
      <div class="g1-footer">

      <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=126, 'twitter_embed', true); ?>
      
      </div>
      
      <div class="g1-footer">
        <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=127, 'livestream_link', true); ?>" target="_blank">
        <div class="ls-button">
          tune in on Livestream&nbsp;<span class="icon">q</span>
        </div></a>
        <p class="social">
          <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=128, 'footer_facebook', true); ?>" target="_blank" style="color: #ECECEC;">Like <span class="icon" id="social">G</span></a>
           <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=128, 'footer_twitter', true); ?>" target="_blank" style="color: #ECECEC;">Follow <span class="icon" id="social">U</span></a>
           <a href="<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($post=128, 'footer_googleplus', true); ?>" target="_blank" style="color: #ECECEC;">Add <span class="icon" id="social">+</span></a>
        </p>
      </div>
      
    </div><!-- End of the Footer Container -->
          <div class="cf"></div>

<div id="footerlogo-container"><!-- Begin the Footer Logo Container -->

      <div class="g3">
        <p class="copyright"><a href="http://powertochange.com/students/" target="_blank"><img src="/plus/wp-content/themes/p2cplus/images/p2cstudent.png" /></a><br />&copy;&nbsp;&nbsp;Power to Change. 2012.</p>
      </div>
      <div class="cf"></div>
    </div>

</footer><!-- End the Footer -->

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- HTML5 IE Enabling Script --> <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- CSS3 Media Queries -->
  <script src="/plus/wp-content/themes/p2cplus/js/respond.min.js"></script>
  <script src="/plus/wp-content/themes/p2cplus/js/functions.js"></script>
  <script src="/plus/wp-content/themes/p2cplus/js/fitvids.js"></script>
  <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script type="text/javascript">stLight.options({publisher: "38483da9-ea69-4c15-ba13-0369b13a7bed"}); </script>
  <script>
    $(document).ready(function(){
      // Target your .container, .wrapper, .post, etc.
      $("#homevideo").fitVids();
    });
  </script>

  	<!-- Optimized Google Analytics. Change UA-XXXXX-X to your site ID -->
  	<script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>

  </body>
  </html>