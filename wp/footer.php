
    <!-- Footer -->
    <footer id="about">
        <div class="container">
             <!-- Biography -->
            <div class="row">

                <!-- My picture -->
                <div class="col-xs-12 col-md-4">
                    <div class="bio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-user-default.jpg" alt="">
                    </div>
                </div>
                <!-- My picture -->
                
                <!-- About -->
                <div class="col-xs-12 col-md-6">
                    <div class="about"> 
                        <h2>Quem sou eu?</h2>
                        <?php dynamic_sidebar( 'about-1');?>
                    </div>
                </div>
                <!-- //About -->

            </div>
            <!-- //Biography -->
        </div>
        <!-- Copyright -->
            <div class="copyright">
                
            </div>
        </div>
        <!-- //Copyright -->
    </footer>
    <!-- // Footer -->
    <?php wp_footer(); ?>
</body>
</html>