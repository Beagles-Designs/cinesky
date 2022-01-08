<?php
/**
 * The template for displaying single crane posts
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="site-content sidebar">
        <div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $title = get_field('gear_page_crane_title');
                $tagline = get_field('crane_tagline');
                $cranea1 = get_field('crane_specs_a1');
                $cranea2 = get_field('crane_specs_a2');
                $craneb1 = get_field('crane_specs_b1');
                $craneb2 = get_field('crane_specs_b2');
                $cranec1 = get_field('crane_specs_c1');
                $cranec2 = get_field('crane_specs_c2');
                $craned1 = get_field('crane_specs_d1');
                $craned2 = get_field('crane_specs_d2');
                $notes = get_field('crane_additional_notes');
                $final = get_field('crane_final_notes'); ?>


                <ul class="crane-popup">
                            <li class="crane-popup-individual">
                                <h2><?php echo $title; ?></h2>
                                <h4><?php echo $tagline; ?></h4>
                                <p class="specs">Specifications</p>  
                                <p><?php echo $cranea1; ?></p>     
                            </li>
                    </ul>
                
                
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->

    </div><!-- #primary -->
<nav id="navigation" class="container">
    <div class="left"><a href="<?php echo site_url('/gear/') ?>">&larr; <span>Back to Gear</span></a></div>
</nav>    

<?php get_footer(); ?>

