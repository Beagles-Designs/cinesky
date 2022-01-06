<ul class="crane-popup">
                    <?php query_posts('post_type=cranes'); ?>
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
                        $final = get_field('crane_final_notes');
                         ?>
                            <li class="crane-popup-individual">
                                <h2><?php echo $title; ?></h2>
                                <h4><?php echo $tagline; ?></h4>
                                <p class="specs">Specifications</p>       
                            </li>
                    <?php endwhile; // end of the loop. ?>
                </ul>