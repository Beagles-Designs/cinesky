<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Cinesky
 * @since Cinesky 1.0
 */

get_header(); ?>

    <div id="primary" class="home-page hero-content main-content">
        <div class="main-content" role="main">
            <?php while ( have_posts()) : the_post();  ?>   
                <?php 
                    $hero_image_url = get_field('homepage_hero_image'); 
                    $boom_travel_url = get_field('boom_travel');
                    $head_rotation  = get_field('head_rotation');
                    $size = 'full';
                ?> 
                <div class="homepage-hero-container parallax" style='background-image:url(<?php echo $hero_image_url; ?>); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;'>
                        <h1>Adding Unparalleled Production Value with Every Shot</h1>             
                </div>
                <div class="homepage-headline-container parallax-content">
                            <div id="homepage-headline-clear">
                                <?php  
                                    $email = get_field("main_email", 325);
                                    $newsubject = get_field("subject_text", 325);
                                 ?>
                                <div class="boom-travel-graphic">
                                    <?php echo wp_get_attachment_image($boom_travel_url, $size); ?>
                                </div>
                                <h2 id="craft">To craft shots that compel and engage;</br>to surpass expectations</h2>
                                <a class="quote-contact" target="_blank" href="mailto:<?php echo $email ?>?subject=<?php echo $newsubject ?>">  Email us for a Quote Today  </a>
                                <div class="head-rotation-graphic">
                                    <?php echo wp_get_attachment_image($head_rotation, $size); ?>
                                </div>
                            </div>   
                        </div>   
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->
    </div><!-- #primary -->

<section class="crane-hero-content main-content">
    <?php $homepage_image2 = get_field('homepage_image_2'); ?>
    <div class="crane-hero-image" style='background-image:url(<?php echo $homepage_image2; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;' >
    </div>     
    <div class="homepage-crane-options">
        <h5>Crane Options</h5>
        <div class="crane-styles">    
            <ul class="homepage-crane-types">
                <?php while ( have_posts()) : the_post(); 
                    $hp_gear_a1 = get_field("hp_gear_a1");
                    $hp_gear_a2 = get_field("hp_gear_a2");
                    $hp_gear_b1 = get_field("hp_gear_b1");
                    $hp_gear_b2 = get_field("hp_gear_b2");
                    $hp_gear_c1 = get_field("hp_gear_c1");
                    $hp_gear_c2 = get_field("hp_gear_c2");
                    $hp_gear_d1 = get_field("hp_gear_d1");
                    $hp_gear_d2 = get_field("hp_gear_d2");
                ?>
                    <!-- Loop content here -->
                    <li class="gear-individual">
                        <div>
                            <h4 class="gear-title"><?php echo $hp_gear_a1; ?></h4>
                            <p class="gear-homepage-specs"><?php echo $hp_gear_a2; ?></p>
                        </div>
                    </li>
                     <li class="gear-individual">
                        <div>
                            <h4 class="gear-title"><?php echo $hp_gear_b1; ?></h4>
                            <p class="gear-homepage-specs"><?php echo $hp_gear_b2; ?></p>
                        </div>    
                    </li> 
                     <li class="gear-individual">
                        <div>
                            <h4 class="gear-title"><?php echo $hp_gear_c1; ?></h4>
                            <p class="gear-homepage-specs"><?php echo $hp_gear_c2; ?></p>
                        </div>
                    </li> 
                     <li class="gear-individual">
                        <div>
                            <h4 class="gear-title"><?php echo $hp_gear_d1; ?></h4>
                            <p class="gear-homepage-specs"><?php echo $hp_gear_d2; ?></p>
                        </div>
                    </li>     
                <?php endwhile; ?>      
            </ul>
        </div>    
        <p id="hp-gear-link"><a href="gear#crane-section">CLICK HERE</a> for our full gear list, additional items and specifications.</p>
    </div>
      
</section>

<section class="project-types main-content">
    <div class='site-content'>
        <h2 id="homepage-project-h2">Project Types</h2>

        <ul class="homepage-project-types">
            <?php query_posts('posts_per_page=3&post_type=project_types'); ?>
                <?php while ( have_posts()) : the_post(); 
                    $image1 = get_field("image_1");
                    $subtitle = get_field("projects_subtitle");
                    $size = "medium";
                ?>
                    <!-- Loop content here -->
                    <li class="featured-work-individual">
                        <figure>
                            <a class="project-type-image" href="<?php echo site_url('/services/') ?>"><?php echo wp_get_attachment_image($image1, $size); ?></a>
                            <div class="project-caption">
                                <h3 class="caption-title"><a href="<?php echo site_url('/services/')  ?>"><strong><?php the_title(); ?></strong></a></h3>
                                <h4><?php echo $subtitle ?></h4>
                            </div>
                        </figure>
                    </li>    
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>         
        </ul>
        <h3 id="unique">Every project is unique</h3>
        <p>Call or email for a quote to meet your project's needs</p>
        <div class='button-div'>
            <?php while (have_posts()) : the_post(); 
                    $email = get_field("main_email", 325);
                    $newsubject = get_field("subject_text", 325);
                ?>
            <a class='button' href="mailto:<?php echo $email ?>?subject=<?php echo $newsubject ?>">Email Now</a>
        <?php endwhile; ?>
        </div>
    </div>    
</section>


<?php get_footer(); ?>
