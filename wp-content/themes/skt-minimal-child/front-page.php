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

    <div id="primary" class="home-page hero-content">
        <div class="main-content" role="main">
            <?php while ( have_posts()) : the_post();      
                $heroimage = get_field("homepage_hero_image");
                $size = "full";
            ?>    
                <h1>Adding Unparalleled Production Value with Every Shot</h1>
                <div class="homepage-hero-container" style="background-image: url(<?php echo wp_get_attachment_image($heroimage, $size); ?>)" >
                    
                </div>
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->
    </div><!-- #primary -->

<section class="project-types">
    <div class='site-content'>
        <h4>Featured Work</h4>

        <ul class="homepage-project-types">
            <?php query_posts('posts_per_page=3&post_type=project_types'); ?>
                <?php while ( have_posts()) : the_post(); 
                    $image1 = get_field("image_1");
                    $size = "medium";
                ?>
                    <!-- Loop content here -->
                    <li class="featured-work-individual">
                        <figure>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image1, $size); ?></a>
                        </figure>
                        <h3><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
                    </li>    
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>         
        </ul>

    </div>    
</section>


<?php get_footer(); ?>
