<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Cinesky
 * @since Cinesky 2.0
 */
?>

    </div><!-- #main -->

    <footer id="colophon" class="site-footer clearfix" role="contentinfo">
      <div class="footer-wrapper">
        <div class="site-info">
          <nav class="footer-menu-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
          </nav>

          <div class="logo footer-logo">
              <a href="<?php echo site_url('/home/') ?>"><?php skt_minimal_the_custom_logo(); ?></a>
          </div> 

          <div class="footer-contact">
            <?php while ( have_posts()) : the_post(); 
                      $email = get_field("main_email", 325);
                      $newsubject = get_field("subject_text", 325);
                  ?>
            <?php endwhile; ?>      
            <p>CONTACT</p>
            <p id="footer-phone">(310) 920-1502 </p>
            <a href="mailto:<?php echo $email ?>?subject=<?php echo $newsubject ?>"><?php echo $email ?></a>
             
          </div>
          
        </div><!-- .site-info -->
      </div>  
      <div id="copyright-area">
        <div class="maxwidth copyright-area-small">
          <p>Copyright</p>
          <p>Beagle's Designs 2022</p>
        </div>
      </div>
    </footer><!-- #colophon -->

  </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
</html>
