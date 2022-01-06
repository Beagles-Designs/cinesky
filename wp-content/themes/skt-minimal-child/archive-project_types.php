<?php
/**
 * Template Name: Project Types
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
			<ul class="archive-case-study">
                    <?php the_content(); ?>

                    <section class="project-types-main">
                         <?php query_posts('post_type=project_types'); ?>
                                <?php while ( have_posts() ) : the_post();  ?>
                                <li class="archive-project-type-individual">
                                    <article class="project-type">
                                        <aside class="project-type-sidebar">
                                              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                              <h5><?php echo $services; ?></h5>
                                              <p><?php the_excerpt(); ?></p>
                                              <a class="case-button" href="<?php echo $link; ?>"><strong>Visit Project ></strong></a> 
                                        </aside>
                                        <div class="case-study-images archive-case-study-images">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if($image1) { 
                                                    echo wp_get_attachment_image( $image1, $size);
                                                } ?>
                                            </a>     
                                        </div>

                                    </article>
                                </li>
                        <?php endwhile; ?>        
                    </section>    
            </ul>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
