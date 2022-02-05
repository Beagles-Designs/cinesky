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
                        <h3>Jump to Section</h3>
                        <nav class="gear-menu-navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'gear-subsection', 'menu_class' => 'gear-subsection', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </nav> 
                    </div>    
                     
                <?php endwhile; // end of the loop. ?>  
        </section>        
        <div class="crane-image" style='background-image:url(http://localhost:8888/cinesky/wp-content/uploads/2021/12/crane_hero.jpeg); background-size: cover; background-repeat: no-repeat; background-position: center;'>
        </div>    
        <div class="gear-crane-container maxwidth" id="crane-section">
            <h3 class="subtitle">Cranes</h3>
            <p>Click for Additional Info</p>
            <ul class="crane-information gear-lists">
                <?php query_posts('post_type=cranes'); ?>
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
                <ul class="additions-information gear-lists">
                    <?php query_posts('post_type=additions'); ?>
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
                <ul class="heads-information gear-lists">
                    <?php query_posts('post_type=remote_heads'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $popupclass = get_field('popup_class');
                         ?>
                            <li class="heads-type-individual gear1">
                                <button class="heads-title <?php echo $popupclass; ?>"><?php the_title(); ?></button>         
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>
        <div id="gear-email-tag-container">    
            <h3>Call or Email to discuss your specific needs.</h3>
            <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email Now</a>      
        </div>
        
        <div class="clear"></div>
        <div class="sticky-email">
                    <button class="popmake-227" onclick="emailToggle()"><i class="fas fa-envelope"></i><i class="fas fa-angle-up"></i></button>
                    <div id="popup-email">
                        <p>Call or email to discuss your specific needs</p>
                        <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote"><button class="popmake-227"><i class="fas fa-envelope"></i></button></a>
                    </div>
        </div>
    </div><!-- page_content -->
    </div>

</div><!-- container -->

<?php get_footer(); ?>