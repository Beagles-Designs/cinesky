<?php
/**
 * Template Name: Services
 * 
 * The template for displaying all pages
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="site-content sidebar">
        <div class="main-content" role="main">
            <section class="services-intro-content">
                <h2>Project Types</h2>
                <h3>If you have a camera...</h3>
                <h3>We can swing it.</h3>
                <p>Live Events</p>
                <p>Concerts</p>
                <p>Sports</p>
                <p>Music Videos</p>
                <p>Narrative</p>
                <p>Feature Films</p>
                <p>Digital Content</p>
            </section>

            <section class="reel-section site-content">
                <p>We have years of experience and technical expertise in a broad range of productions. Look at some of ours and reach out to discuss yours.</p>
                    <?php the_content(); ?>
            </section>        

            <section class="past-projects-main">
                <h2>Past Projects</h2>
                <ul class="past-projects-content">
                     <?php query_posts('post_type=past_projects'); ?>
                            <?php while ( have_posts() ) : the_post();  
                                $image = get_field('past_project_image');
                                $size = 'small';
                                $type = get_field('past_project_type');
                                $gear1 = get_field('gear_1');
                                $gear2 = get_field('gear_2');
                                $gear3 = get_field('gear_3');
                                $gear4 = get_field('gear_4');
                                $similar1 = get_field('similar_projects_1');
                                $similar2 = get_field('similar_projects_2');
                                $similar3 = get_field('similar_projects_3');
                                $link = get_field('project_links');
                            ?>
                            <li class="past-projects-individual">
                                <article class="past-projects">
                                    <div class="case-study-images archive-case-study-images">
                                        <a href="<?php echo $link ?>" target="_blank">
                                            <?php if($image) { 
                                                echo wp_get_attachment_image( $image, $size);
                                            } ?>
                                        </a> 
                                    <h2><a href="<?php echo $link ?>" target="_blank"><?php the_title(); ?></a></h2>

                                    <aside class="gear-used-sidebar">
                                        <h5>Gear Used</h5>
                                        <ul class="gear-list-main">
                                            <li><?php echo $gear1 ?></li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($gear2) { 
                                                        $showliitem = 'block';
                                                        echo $gear2;
                                                }?>
                                            </li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($gear3) { 
                                                        $showliitem = 'block';
                                                        echo $gear3;
                                                }?>
                                            </li>
                                            <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($gear4) { 
                                                        $showliitem = 'block';
                                                        echo $gear4;
                                                }?>
                                            </li>
                                        </ul>  
                                    </aside>

                                    <aside class="similar-sidebar">
                                        <h5>Similar Projects</h5>
                                        <ul class="similar-list-main">
                                            <li><?php echo $similar1 ?></li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($similar2) { 
                                                        $showliitem = 'block';
                                                        echo $similar2;
                                                }?>
                                            </li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($similar3) { 
                                                        $showliitem = 'block';
                                                        echo $similar3;
                                                }?>
                                            </li>
                                        </ul>   
                                    </aside>
                                </article>
                            </li>
                    <?php endwhile; ?>  
                </ul>          
            </section> 

            <section class="services-closing">
                <h3>Every Project is Unique.</h3>
                <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email Now</a>
            </section>   
   
        </div><!-- .main-content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
