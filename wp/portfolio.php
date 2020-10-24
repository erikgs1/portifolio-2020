<?php 

/*
Template Name: Portfólio
*/

?>

<?php get_header(); ?>
    
    <!-- Main Content -->
    <main id="main">
        <div class="container-xs container-md ">
            <nav>
                <ul>
                    <li><a class="button-newsletter">Newsletter</a></li>
                    
                    <li><a class="button-email">Email Marketing</a></li>
                    
                    <li><a class="button-templates" >Templates WP</a></li>

                    <li><a class="button-landing">Landing Pages</a></li>
                </ul>
            </nav>
            <div class="container">
                <div class="row">
                    <?php
                        $projects = new WP_Query('post_type=post&posts_per_page=8');
                        if(  $projects->have_posts() ):
                            while(  $projects->have_posts()):  $projects->the_post();
                            $categories = get_the_category();
                            $category_id = $categories[0]->cat_ID;
                    ?>
                        <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 <?php echo $categories[0]->cat_name; ?> ">
                            <div class="projects">
                                <div class="box-image">
                                    <?php the_post_thumbnail( 'large', array('class' => 'img-fluid' )); ?>
                                </div>
                                <div class="box-title">
                                    <h2> <?php the_title(); ?> </h2>
                                </div>
                                
                            </div>
                        </div>

                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </main>
    <!-- //Main Content -->
    <?php get_footer(); ?>

