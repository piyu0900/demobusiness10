<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

        


    

    <!-- ==================== Start Slider ==================== -->

    <header class="slider-bus position-re valign home_page">
        <div class="container ontop">
            <div class="swiper-container swiper-content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-1 offset-md-1">
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="swiper-container swiper-img">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-img desktop_banner" data-background="<?php echo bloginfo('template_url');  ?>/img/slid/1.jpg"></div>
                <div class="swiper-slide bg-img mobile_banner" style="display:none;"
                    data-background="<?php echo bloginfo('template_url');  ?>/img/slid/1-mobile.jpg"></div>
            </div>
        </div>
       

        <!-- slider setting -->
        <div class="setone">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination custom-font"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6>About Us</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       

                       <?php $the_query = new WP_Query( 'page_id=6' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                    <?php the_content(); ?>

                    <?php endwhile;?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blc-img">
                        <div class="bimg wow imago">
                            <img src="<?php echo bloginfo('template_url');  ?>/img/intro/about.png" alt="">
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding sub-bg director_page">
        <div class="container">
            <div class="sec-head custom-font tr-head">
                <!-- <h6>Best Features</h6> -->
                <h3>our <strong>Directors</strong></h3>
                <span class="tbg">Directors</span>
            </div>
            <div class="row">
                

                
                <?php $the_query = new WP_Query( 'page_id=7' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                    <?php the_content(); ?>

                <?php endwhile;?>



            </div>


            <!-- <div class="smore custom-font">
                <a href="#0">Discover More</a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div> -->


        </div>
    </section>





    <!-- ==================== Brands ==================== -->
    <section class="services brands section-padding sub-bg">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h4>we create</h4>
                    <h2>Brands</h2>
                </div>

                <div class="col-md-8">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            
                            <?php $the_query = new WP_Query( 'page_id=14' ); ?>

                                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                <?php the_content(); ?>

                            <?php endwhile;?>




                        </div>
                    </div>

                    <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer" style="display: none;">
                        <i class="ion-ios-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer" style="display: none;">
                        <i class="ion-ios-arrow-left"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==================== End Brands ==================== -->











        <div class="videoconatiner">
            <div class="container showreel_page ">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="videotitle"><small>Video</small> gallery </h2>
                    </div>
                </div>
                <div class="row">
                    <div style="max-width: 100%; margin:0px auto;text-align: center;">
                    <container class="col-md-vid-12 main-wrapper clearfix">
                         
                        <div class="row d-flex align-items-center">
                            <div class="col-md-8 vid-container">
                                <iframe id="vid_frame" src="https://player.vimeo.com/video/653754539?h=7d0563ab86" frameborder="0" width="760" height="515" allow="autoplay" allowfullscreen></iframe>
                                
                            </div>
                            <div class="col-md-4 vid-galtext">
                                <small>Ad Name</small>
                                <h3>Type the Video Title Here</h3>
                            </div>
                        </div>
                    </container>
                    
                      <section id="extra wrapper" style="width:100%; position: relative;padding-top: 60px;top:-50px">
                    
                        <button title="Next" class="swiper-custom-next" style="position: absolute;right: 0px;top: 15px; z-index: 100;
                        display: inline-block;cursor: pointer;background-color: transparent;border: none;outline: none;">     
                    <svg style="position: relative; top: 1px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16"><g class="nc-icon-wrapper" fill="#111111"><polygon fill="white" points="4.9,15.7 3.4,14.3 9.7,8 3.4,1.7 4.9,0.3 12.6,8 "></polygon></g></svg>
                        </button>
                        <button title="Prev" class="swiper-custom-prev" style="position: absolute; right: 55px; top:15px; z-index: 100;
                        display: inline-block;cursor: pointer;font-size: 15px;border: none;background-color: transparent;outline: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16"><g class="nc-icon-wrapper" fill="#111111"><polygon fill="white" points="11.1,15.7 3.4,8 11.1,0.3 12.6,1.7 6.3,8 12.6,14.3 "></polygon></g></svg>
                        </button>
                    
                        <nav class="swiper swiper-container-videos slider-produtos-destaque">
                        <ol class="swiper-wrapper" style="list-style-type: none; padding: 0px;">
                            
                            


                            <?php

                            $args = array( 

                                                                      

                            'post_type' => 'gallery', 

                            'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).

                            'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.

                            'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.

                            );

                                                                    

                            $the_query = new WP_Query( $args );

                            // The Loop

                            if ( $the_query->have_posts() ) :

                            while ( $the_query->have_posts() ) : $the_query->the_post();

                            ?>




                                    <li class="swiper-slide">

                                        <a href="javascript:void();" onClick="document.getElementById('vid_frame').src='<?php the_content();  ?>'">
                                                <span class="vid-thumb"><img  src="<?php the_post_thumbnail_url(array(240*143)); ?>" /></span>
                                                <div class="desc">Video 00</div>
                                            </a>
                                    </li>
                            
                                <?php

                            endwhile;

                            endif;

                        ?>

    
                            
                        </ol>
                        </nav>
                    
                    </section> 
                    
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <!--------------- vimal code end---------------->

    <!-- ==================== End block-sec ==================== -->







<?php get_footer(); ?>
