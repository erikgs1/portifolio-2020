<?php get_header(); ?>
    <main>
        <div class="container"> 
            <div class="projects-container">
                <div class="row">
                    <!-- Conteudo -->
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) :
                            the_post();
                    ?>  
                        <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="projects">
                                <a href="<?php echo $post_link?>">
                                    <div class="box-image">
                                        <?php the_post_thumbnail( 'large', array('class' => 'img-fluid' )); ?>
                                    </div>
                                    <div class="box-title">
                                        <h2> <?php the_title(); ?> </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php 
                        endwhile; // End the loop.
                    ?>
                    <!-- Conteudo -->
                </div>
            </div>
        </div>   
    </main>
<?php get_footer(); ?>