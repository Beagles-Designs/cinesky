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
                <?php $hero_image_url = get_field('homepage_hero_image'); ?> 
                <h1>Adding Unparalleled Production Value with Every Shot</h1>
                <div class="homepage-hero-container" style='background-image:url(<?php echo $hero_image_url; ?>)' >
                    <div class="homepage-headline-container">
                        <h2>To craft shots that compel and engage;</br>to surpass expectations</h2>
                        <a class="quote-contact" href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email us for a Quote Today</a>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->
    </div><!-- #primary -->

<section class="crane-hero-content main-content">
    <?php $homepage_image2 = get_field('homepage_image_2'); ?>
    <div class="crane-hero-image" style='background-image:url(<?php echo $homepage_image2; ?>)' >
        <div class="homepage-crane-options">
            <h5>Crane Options</h5>
        <ul class="homepage-crane-types">
            <?php query_posts('posts_per_page=4&post_type=cranes'); ?>
                <?php while ( have_posts()) : the_post(); 
                    $specs = get_field("homepage_specs");
                ?>
                    <!-- Loop content here -->
                    <li class="crane-individual">
                        <h4 class="crane-title"><?php the_title(); ?></h4>
                        <p class="crane-homepage-specs"><?php echo "$specs"; ?></p>
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>         
        </ul>
        </div>
    </div>   
</section>

<section class="project-types main-content">
    <div class='site-content'>
        <h2>Project Types</h2>

        <ul class="homepage-project-types">
            <?php query_posts('posts_per_page=3&post_type=project_types'); ?>
                <?php while ( have_posts()) : the_post(); 
                    $image1 = get_field("image_1");
                    $size = "medium";
                ?>
                    <!-- Loop content here -->
                    <li class="featured-work-individual">
                        <figure>
                            <a href="<?php echo site_url('/services/') ?>"><?php echo wp_get_attachment_image($image1, $size); ?></a>
                        </figure>
                        <h3><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
                    </li>    
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>         
        </ul>
        <h3>Every project is unique.</h3>
        <p>Call or email for a quote to meet your project's needs.</p>
        <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email Now</a>
    </div>    
</section>


<?php get_footer(); ?>
