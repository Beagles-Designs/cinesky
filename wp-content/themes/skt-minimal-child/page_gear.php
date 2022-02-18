<?php
/**
 * Template Name: Gear Page
 *
 * @package SKT Minimal
 */
get_header(); ?>
<div class="container">
     <div id="site-content">		
     <div class="page_content">  
        <section class="gear-top site-main">            
                <?php while ( have_posts() ) : the_post();
                        ?>
                    <div class='maxwidth'>        
        				<h2>Gear</h2>
                        <nav class="gear-menu-navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'gear-subsection', 'menu_class' => 'gear-subsection', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </nav> 
                    </div>    
                     
                <?php endwhile; // end of the loop. ?>  
        </section> 
        <?php $gear_image_url = get_field('gear_image', 81); ?>       
            <div class="crane-image" style='background-image:url(<?php echo $gear_image_url; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;'>
            </div>    
        <div class="gear-crane-container maxwidth" id="crane-section">
            <h3 class="subtitle">Cranes</h3>
            <p>Click each for additional info</p>
            <ul class="crane-information gear-lists">
                <?php query_posts(array('post_type' => 'cranes', 'orderby' => 'publish_date', 'order' => 'ASC')); ?>
                <?php while ( have_posts() ) : the_post(); 
                    $specs = get_field('homepage_specs');
                    $title = get_field('gear_page_crane_title');
                    $popupclass = get_field('popup_class');
                     ?>
                        <li class="crane-type-individual gear1">
                            <button class="crane-title <?php echo $popupclass; ?>"><?php echo $title; ?></button>
   
                        </li>
                <?php endwhile; // end of the loop. ?>
            </ul>
        </div>
        <section id="additions-section">
            <div class="gear-additions-container maxwidth">
                <h3 class="subtitle">Additions</h3>
                <p>Click each for additional info</p>
                <ul class="additions-information gear-lists">
                    <?php query_posts(array('post_type' => 'additions', 'orderby' => 'publish_date', 'order' => 'ASC')); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $popupclass = get_field('popup_class');
                         ?>
                            <li class="addition-type-individual gear2">
                                <button class="additions-title <?php echo $popupclass; ?>"><?php the_title(); ?></button>         
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>
        </section>
          
            <div class="gear-heads-container maxwidth" id="heads-section">
                <h3 class="subtitle">Remote Heads</h3>
                <p>Click each for additional info</p>
                <ul class="heads-information gear-lists" reversed>
                    <?php query_posts(array('post_type' => 'remote_heads', 'orderby' => 'publish_date', 'order' => 'ASC')); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $popupclass = get_field('popup_class');
                         ?>
                            <li class="heads-type-individual gear1">
                                <button class="heads-title <?php echo $popupclass; ?>"><?php the_title(); ?></button>         
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>
        <div id="gear-email-tag-container" class='maxwidth'>    
            <h3>Call or email to discuss your specific needs</h3>
            <div class="button-div"> 
                <?php 
                    $email = get_field("main_email", 325);
                    $newsubject = get_field("subject_text", 325);
                ?>   
                <a class='button' href="mailto:<?php echo $email ?>?subject=<?php echo $newsubject ?>">Email Now</a>     
            </div>
        </div>
        
  
        <div class="sticky-email">
                    <a class='button' href="mailto:<?php echo $email ?>?subject=<?php echo $newsubject ?>"><button><i class="fas fa-envelope"></i></button></a>
        </div>
        <div id='gear-spacer'></div>
    </div><!-- page_content -->
    </div>

</div><!-- container -->

<?php get_footer(); ?>