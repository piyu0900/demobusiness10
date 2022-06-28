<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>






    <!-- ==================== Start Footer ==================== -->

    <footer class="footer-half sub-bg section-padding pb-0 contact_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cont">
                        <div class="logo">
                            <a href="#0">
                                <img src="img/logo-light.png" alt="">
                            </a>
                        </div>
                        <div class="con-info custom-font">
                            <ul>
                                

                            	<?php $the_query = new WP_Query( 'page_id=18' ); ?>

								<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

								<?php the_content(); ?>

							<?php endwhile;?>


                            </ul>
                        </div>
                        <div class="social-icon">
                            <h6 class="custom-font stit simple-btn">Follow Us</h6>
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-vimeo"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="subscribe mb-50">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d15074.359717107032!2d72.84529808545601!3d19.16941926642669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d19.1709042!2d72.8505859!5e0!3m2!1sen!2sin!4v1623856735923!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                </div>
            </div>
            <div class="copyrights text-center">
                <p>© 2021, SVENFILMS.CO. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->






    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>




<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
