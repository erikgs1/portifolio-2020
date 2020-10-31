<?php get_header(); ?>
    <main>
        <div class="container"> 
            <div class="row">
                <!-- Conteudo -->
                <div class=" col-12 text-center">
                    <div class="mb-5">
                        <h1><?php echo the_title() ?></h1>
                    </div>  
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) :
                            the_post();
                    ?>
                        <div class="project-body">
                            <?php
                                the_content(); 
                                the_tags( '', '');
                            ?>
                        </div>
                    <?php 
                        endwhile; // End the loop.
                    ?>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>
<?php get_footer(); ?>