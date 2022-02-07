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
        <div class="services-main-content" role="main">
            <section class="services-intro-content">
                <?php while ( have_posts()) : the_post();  ?>   
                    <?php  
                        $boom_travel_url = get_field('boom_travel');
                        $size = 'full';
                    ?> 
                    <h2>Project Types</h2>
                    <p class="services-tagline">You bring the vision,</p>
                    <p class="services-tagline">We'll provide the execution. </p>
                    <div id="services-headline-clear">    
                        <div class="boom-travel-graphic services-boom-graphic">
                            <img src="http://localhost:8888/cinesky/wp-content/uploads/2022/02/boomtravel-1.png">
                        </div>
                        <p>Live Events</p>
                        <p>Concerts</p>
                        <p>Sports</p>
                        <p>Music Videos</p>
                        <p>Narrative</p>
                        <p>Feature Films</p>
                        <p>Digital Content</p>
                    </div>    
                <?php endwhile ?>    
            </section>

            <section class="reel-section site-content">
                <p>We have years of experience and technical expertise in a broad range of productions. Look at some of ours and reach out to discuss yours.</p>
                    <?php the_content(); ?>
            </section>        

            <section class="past-projects-main">
                <h3 class="subtitle">Past Projects</h3>
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
                                $i++;
                            ?>
                            <li class="past-projects-individual <?php if ($i %2 == 0) {echo 'li-right';} else { echo 'li-left';} ?>">    
                                <article class="past-projects">
                                    <div class="case-study-images archive-case-study-images">
                                        <a href="<?php echo $link ?>" target="_blank">
                                            <?php if($image) { 
                                                echo wp_get_attachment_image( $image, $size);
                                            } ?>
                                        </a> 
                                        <div class="project-caption services-caption">
                                            <h3 class="caption-title services-h3"><a href="<?php echo $link ?>" target="_blank"><strong><?php the_title(); ?></strong></a></h3>
                                            <h4><?php echo $type ?></h4>
                                        </div>
                                    </div>    

                                    <aside class="gear-used-sidebar">
                                        <div id="dashed-line-2"></div>
                                        <h6>Gear Used</h6>
                                        <p><?php echo $gear1 ?></p>
                                    </aside>

                                    <aside class="similar-sidebar">
                                        <div id="similar-aside-top-bar"></div>
                                        <div id="dashed-line-3"></div>
                                        <h6>Similar Projects</h6>
                                        <ul class="similar-list-main">
                                            <li>
                                                <div>
                                                    <p class="text-left"><?php echo $similar1 ?></p>
                                                    <div class="dashed-line-1"></div>
                                                    <p class="text-right"><?php echo $gear2 ?></p>
                                                </div>
                                            </li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($similar2) { 
                                                        $showliitem = 'block';
                                                }?>
                                                <div> 
                                                   <p class="text-left"><?php echo $similar2 ?></p>
                                                   <div class="dashed-line-1"></div>
                                                   <p class="text-right"><?php echo $gear3 ?></p>
                                                </div>   
                                            </li>
                                             <li style="display:<?= $showliitem?>"><?php 
                                                    $showliitem = 'none';
                                                    if($similar3) { 
                                                        $showliitem = 'block';
                                                }?>
                                                <div> 
                                                   <p class="text-left"><?php echo $similar3 ?></p>
                                                   <div class="dashed-line-1"></div>
                                                   <p class="text-right"><?php echo $gear4 ?></p>
                                                </div> 
                                            </li>
                                        </ul>   
                                    </aside>
                                </article>
                            </li>

                    <?php endwhile; ?>  
                </ul>          
            </section> 

            <section class="services-closing">
                <h3 id="unique">Every project is unique.</h3>
                    <p>Call or email for a quote to meet your project's needs.</p>
                    <div class='button-div'>
            <a class='button' href="mailto:sarah.e.beagle@gmail.com?subject=Interested Production for a Cinesky Quote">Email Now</a>
        </div>
            </section>   
   
        </div><!-- .main-content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
