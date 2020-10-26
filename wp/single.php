<?php get_header(); ?>
    <main id="main" class="main-background" style="background-image:url(<?php echo $thumb_url ?>)">
        <div class="container"> 
            <div class="row">
                <!-- Conteudo -->
                <div class=" col-12">
                    <div class="mb-5">
                        <h1><?php echo the_title() ?></h1>
                    </div>  
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) :
                            the_post();
                    ?>
                        <div>
                            <?php
                                the_content();
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