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
        <section class="site-main">            
            <?php while ( have_posts() ) : the_post();
                    ?>    
    				<h2>Gear</h2>
                    <h3>Jump to Section</h3>
                <nav class="gear-menu-navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'gear-subsection', 'menu_class' => 'gear-subsection', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                </nav> 
            <?php endwhile; // end of the loop. ?>  
            <div class="gear-crane-container">
                <h2>Cranes</h2>
                <p>Click for Additional Info</p>
                <ul class="crane-information">
                    <?php query_posts('post_type=cranes'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $specs = get_field('homepage_specs');
                        $title = get_field('gear_page_crane_title');
                        $popupclass = get_field('popup_class');
                         ?>
                            <li class="crane-type-individual">
                                <button class="crane-title <?php echo $popupclass; ?>"><?php echo $title; ?></button>
                                <?php the_content(); ?>        
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>

            <div class="gear-additions-container">
                <h2>Additions</h2>
                <ul class="additions-information">
                    <?php query_posts('post_type=additions'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                         ?>
                            <li class="addition-type-individual">
                                <h2><a class="additions-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>         
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>

            <div class="gear-heads-container">
                <h2>Remote Heads</h2>
                <ul class="heads-information">
                    <?php query_posts('post_type=remote_heads'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                         ?>
                            <li class="heads-type-individual">
                                <h2><a class="heads-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>         
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>
            <h3>Call or Email to discuss your specific needs.</h3>
            <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email Now</a>
         </section>       
     
        <div class="clear"></div>
    </div><!-- page_content -->
    </div>
</div><!-- container -->	
<?php get_footer(); ?>