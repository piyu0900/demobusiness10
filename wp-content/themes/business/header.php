<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Sven Films">
    <meta name="description" content="Sven Films">
    <meta name="author" content="">

<title>
<?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
    echo " | $site_description";
}

    // Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
    /* translators: %s: Page number. */
    echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

?>
    </title>
        <link rel="shortcut icon" href="<?php echo bloginfo('template_url');  ?>/img/favicon.png">
    <!-- Google Fonts -->
    <link href="<?php echo bloginfo('template_url');  ?>/css/css.css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');  ?>/css/css2.css?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');  ?>/css/css-1.css?family=Playfair+Display:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');  ?>/css/css2-1.css?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');  ?>/css/css2-2.css?family=Barlow+Condensed:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/css/style.css">


<?php
    /*
     * We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
if ( is_singular() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}

    /*
     * Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>




<body>



    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

   

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="http://localhost/piyu/business/wp-content/uploads/2022/06/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">



                    <!--  -->
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link home_link">Home</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link aboutus_link">About Us</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link director_link">Directors</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link brands_link">Brands</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link showreel_link">ShowReel</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link contact_link">Contact Us</a></li>
                    <!--  -->


                 
                </ul>


            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

