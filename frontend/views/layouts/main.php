<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="home page body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide top_panel_fixed  body_style_boxed bg_pattern_1">
   <?php $this->beginBody() ?>

    <!-- Body -->
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap bg_tint_dark">
                <!-- User menu -->
                <div class="menu_user_wrap">
                    <div class="content_wrap clearfix">
                        <div class="menu_user_area menu_user_right menu_user_nav_area">
                            <ul id="menu_user" class="menu_user_nav">
                                <li class="menu_user_bookmarks">
                                    <a href="#" class="bookmarks_show icon-star-1" title="Show bookmarks"></a>
                                    <ul class="bookmarks_list">
                                        <li><a href="#" class="bookmarks_add icon-star-empty" title="Add the current page into bookmarks">Add bookmark</a></li>
                                    </ul>
                                </li>
                                <li class="menu_user_controls">
                                    <a href="#">
                                        <span class="user_avatar">
                                            <img alt="" src="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=16&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=32&amp;d=mm&amp;r=g 2x" class="avatar avatar-16 photo" height="16" width="16" />
                                        </span>
                                        <span class="user_name">John Doe</span></a>
                                    <ul>
                                        <li><a href="#" class="icon icon-doc-inv">New post</a></li>
                                        <li><a href="#" class="icon icon-cog-1">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="menu_user_logout">
                                    <a href="#" class="icon icon-logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_user_area menu_user_left menu_user_contact_area">Contact us on 0 800 123-4567 or <a href="#">support@themerex.net</a></div>
                    </div>
                </div>
                <!-- /User menu -->
                <!-- Main menu -->
                <div class="menu_main_wrap logo_left">                  
                    <div class="content_wrap clearfix">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="images/logo_dark.png" class="logo_main" alt="">
                                <img src="images/logo_dark.png" class="logo_fixed" alt="">
                            </a>
                        </div>
                        <!-- Logo -->
                        <!-- Search -->
                        <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
                            <a href="#" class="search_icon icon-search-2"></a>
                            <div class="search_form_wrap">
                                <form method="get" class="search_form" action="#">
                                    <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>
                                    <input type="text" class="search_field" placeholder="" value="" name="s" title="" />
                                </form>
                            </div>
                            <div class="search_results widget_area bg_tint_light">
                                <a class="search_results_close icon-delete-2"></a>
                                <div class="search_results_content">
                            </div>
                            </div>
                        </div>
                        <!-- /Search -->
                        <!-- Navigation -->
                        <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
                        <nav class="menu_main_nav_area">
                            <ul id="menu_main" class="menu_main_nav">
                                <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><a href="index-2.html">About</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item page_item current_page_item"><a href="index-2.html">Feuatures</a></li>
                                        <li class="menu-item"><a href="homepage-2.html">Homepage Boxed</a></li>
                                        <li class="menu-item"><a href="homepage-3.html">Homepage Photos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Features</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="typography.html">Typography</a></li>
                                        <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                        <li class="menu-item"><a href="video-tutorials.html">Video Tutorials</a></li>
                                        <li class="menu-item"><a href="events.html">Events Calendar</a></li>
                                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                                        <li class="menu-item"><a href="not-existing-page.html">Page 404</a></li>
                                        <li class="menu-item"><a href="not-existing-page-2.html">Page 404 (Style 2)</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="courses-streampage.html">Courses</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="courses-streampage.html">All courses</a></li>
                                        <li class="menu-item"><a href="free-course.html">Free course</a></li>
                                        <li class="menu-item"><a href="paid-course.html">Paid course</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Lessons</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>
                                                <li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>
                                                <li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="team-members.html">Teachers</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="team-members.html">Teachers Team</a></li>
                                        <li class="menu-item"><a href="personal-page.html">Teacher&#8217;s Personal Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="blog-streampage.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="#">Post Formats</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="post-formats-with-sidebar.html">With Sidebar</a></li>
                                                <li class="menu-item"><a href="post-formats.html">Without sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Masonry tiles</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="masonry-2-columns.html">Masonry (2 columns)</a></li>
                                                <li class="menu-item"><a href="masonry-3-columns.html">Masonry (3 columns)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Portfolio tiles</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio (2 columns)</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio (3 columns)</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Portfolio hovers</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="portfolio-hovers-circle.html">Circle, Part 1</a></li>
                                                        <li class="menu-item"><a href="portfolio-hovers-circle-part-2.html">Circle, Part 2</a></li>
                                                        <li class="menu-item"><a href="portfolio-hovers-circle-part-3.html">Circle, Part 3</a></li>
                                                        <li class="menu-item"><a href="portfolio-hovers-square.html">Square, Part 1</a></li>
                                                        <li class="menu-item"><a href="portfolio-hovers-square-part-2.html">Square, Part 2</a></li>
                                                        <li class="menu-item"><a href="portfolio-hovers-square-part-3.html">Square, Part 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="products.html">Shop</a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
                <!-- /Main menu -->
            </header>
            <!-- Revolution slider -->
            <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">                    
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">
                        <ul>
                            <!-- Slide 1 -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                <img src="images/green.jpg" alt="green" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
                                <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="20" data-y="230" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
                                    <img src="images/slide-1-1.png" alt="">
                                </div>
                                 <div class="tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="190" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">The Fast, Secure and Professional PHP Framework
                                </div>
                                <div class="tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="380" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
                                    <span class="font-w_400">
                                        
                                        Yii is a high-performance PHP framework best for developing Web 2.0 applications.

Yii comes with rich features: MVC, DAO/ActiveRecord, I18N/L10N, caching, authentication and role-based access control, scaffolding, testing, etc. It can reduce your development time significantly
                                    </span>
                                </div>

                            </li>
                            <!-- Slide 2 -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                <img src="images/blue.jpg" alt="blue" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
                                <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="40" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
                                    <img src="images/slide-2-1.png" alt="">
                                </div>
                                <div class="tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Education Center
                                    <br> and distance education
                                </div>
                                <div class="tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
                                    <span class="font-w_400">Online Education leads the world in distance education with high quality online degrees and online courses.</span>
                                </div>
                                <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">
                                    <a href="#" class="slide_button_white">Start Learning Now</a>
                                </div>
                            </li>
                         
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>
            <!-- Revolution slider -->
            <!-- Content -->
            <div class="page_content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
                        <section class="post_content">
                            <!-- Features section -->
                            <div class="sc_section" data-animation="animated zoomIn normal">
                                <div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1">
                                    <div class="columns_wrap sc_columns columns_fluid sc_columns_count_3">
                                        <div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
                                            <a href="#" class="sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="#">Professional</a>
                                                </p>
                                                <p>
                                                Yii helps you develop clean and reusable code. It follows the MVC pattern, ensuring a clear separation of logic and presentation.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column-1_3 sc_column_item sc_column_item_2 even text_center">
                                            <a href="#" class="sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="#">Fast</a>

                                                </p>
                                                <p>Yii only loads the features that you need. It has powerful caching support. It is explicitly designed to work efficiently with AJAX.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">
                                            <a href="#" class="sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="#">Secure</a>
                                                </p>
                                                <p>Security comes as standard with Yii. It includes input validation, output filtering, SQL injection and Cross-site scripting prevention.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Features section -->          
                            <!-- Courses section -->
                            <div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
                                <div class="sc_section_overlay">
                                    <div class="sc_section_content">
                                        <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
                                            <h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Books and Videos on Yii</h2>
                                            <div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description">
                                                <div class="isotope_wrap" data-columns="3">
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses odd">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="Principles of Written English, Part 2" src="images/masonry_15-400x400.jpg">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="paid-course.html">Principles of Written English, Part 2</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$85</span>
                                                                            <span class="post_price_period">monthly</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Language</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html">Principles of Written English, Part 2</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p>
                                                                                <a href="paid-course.html">Nam id leo massa. Cras at condimentum nisi, vulputate ultrices turpis.</a>
                                                                            </p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses even">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="Entrepreneurship 101: Who is your customer?" src="images/masonry_06-400x400.jpg">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="paid-course.html">Entrepreneurship 101: Who is your customer?</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$195</span><span class="post_price_period">monthly</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Marketing</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html">Entrepreneurship 101:  Who is your customer?</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p>
                                                                                <a href="paid-course.html">Quisque a nulla eget ante vestibulum lacinia eu quis massa.</a>
                                                                            </p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses odd">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="free-course.html">
                                                                        <img alt="Evaluating Social  Programs" src="images/masonry_04-400x400.jpg">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="#">Evaluating Social Programs</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">Free!</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Social</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="free-course.html">Evaluating Social  Programs</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p>
                                                                                <a href="#">Nunc finibus vestibulum dui a fringilla. Maecenas maximus in massa sit amet maximus.</a>
                                                                            </p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="free-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses even">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="Principles of Written English, Part 1" src="images/masonry_05-400x400.jpg">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="#">Principles of Written English, Part 1</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$85</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Language</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html">Principles of Written English, Part 1</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p>
                                                                                <a href="paid-course.html">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
                                                                            </p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses odd">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="Introduction to Biomedical Imaging" src="images/masonry_03-400x400.jpg"></a>
                                                                    <h4 class="post_title">
                                                                        <a href="paid-course.html">Introduction to Biomedical Imaging</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$400</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Medicine</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html">Introduction to Biomedical Imaging</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p><a href="paid-course.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                    <!-- Courses item -->
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses even last">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="Introduction to Computer  Science" src="images/masonry_02-400x400.jpg">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="paid-course.html">Introduction to Computer  Science</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$120</span>
                                                                            <span class="post_price_period">monthly</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <a href="product-category.html">Computers</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html">Introduction to Computer  Science</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p><a href="paid-course.html">Sed interdum felis diam, vitae rutrum urna laoreet vehicula.</a></p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Courses item -->
                                                </div>
                                            </div>
                                            <a href="courses-streampage.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em">VIEW ALL COURSES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Courses section -->
                           
                            <!-- /Partners section -->
                            <!-- Video training section -->         
                            <div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
                            <div class="sc_section" data-animation="animated fadeInUp normal">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp">
                                            <h3 class="sc_title sc_title_iconed sc_align_left text_left">
                                                <span class="sc_title_icon sc_title_icon_top sc_title_icon_medium icon-video-2"></span>
                                                Testimonials
                                            </h3>
                                            <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                                            <a href="courses-streampage.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_mini sc_button_iconed inherit margin_top_1em margin_bottom_4 margin_left_4">BROWSE COURSES</a>
                                        </div>
                                        <div class="column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp">
                                            <div class="sc_video_player sc_video_bordered sc_video_st1">
                                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per" data-width="100%" data-height="647" data-video="&lt;iframe class=&quot;video_frame&quot; src=_http_/youtube.com/embed/636Dp8eHWnM5782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                                    <img alt="" src="images/douglas_adams_full-400x225.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
                            <div class="sc_section" data-animation="animated fadeInUp normal">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
                                  <h2 class="sc_title sc_title_regular margin_top_0">Latest News</h2>
                                   <article class="post_item post_item_excerpt post_featured_right odd post type-post">
                            <div class="post_content clearfix">
                                <h4 class="post_title">
                                    <a href="post-without-image.html"><span class="post_icon icon-book-2"></span>New Post Without Image</a>
                                </h4>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">Posted 
                                        <a href="#" class="post_info_date">December 28, 2014</a>
                                    </span>
                                    <span class="post_info_item post_info_posted_by">by 
                                        <a href="#" class="post_info_author">John Doe</a>
                                    </span>
                                    <span class="post_info_item post_info_counters">    
                                        <a class="post_counters_item post_counters_views icon-eye" title="Views - 215" href="#">215</a>
                                        <a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 4" href="#">
                                            <span class="post_counters_number">4</span>
                                        </a>
                                        <a class="post_counters_item post_counters_likes icon-heart enabled inited" title="Like" href="#">
                                            <span class="post_counters_number">1</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="post_descr">
                                    <p>Duis auctor arcu ac mi bibendum posuere. Integer diam orci, faucibus ut mi sed, tincidunt vehicula erat. Sed ultricies tempor nunc, nec malesuada tortor vehicula ac. Curabitur imperdiet massa ac ex pretium, et mollis metus aliquet. Phasellus...</p>
                                    <a href="post-without-image.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">READ MORE</a> 
                                </div>
                            </div>
                        </article>
                                </div>
                            </div>
                                <div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
                            <div class="sc_section" data-animation="animated fadeInUp normal">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
                                  <h2 class="sc_title sc_title_regular margin_top_0">Latest Tutorials</h2>
                                   <article class="post_item post_item_excerpt post_featured_right odd post type-post">
                            <div class="post_content clearfix">
                                <h4 class="post_title">
                                    <a href="post-without-image.html"><span class="post_icon icon-book-2"></span>New Post Without Image</a>
                                </h4>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">Posted 
                                        <a href="#" class="post_info_date">December 28, 2014</a>
                                    </span>
                                    <span class="post_info_item post_info_posted_by">by 
                                        <a href="#" class="post_info_author">John Doe</a>
                                    </span>
                                    <span class="post_info_item post_info_counters">    
                                        <a class="post_counters_item post_counters_views icon-eye" title="Views - 215" href="#">215</a>
                                        <a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 4" href="#">
                                            <span class="post_counters_number">4</span>
                                        </a>
                                        <a class="post_counters_item post_counters_likes icon-heart enabled inited" title="Like" href="#">
                                            <span class="post_counters_number">1</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="post_descr">
                                    <p>Duis auctor arcu ac mi bibendum posuere. Integer diam orci, faucibus ut mi sed, tincidunt vehicula erat. Sed ultricies tempor nunc, nec malesuada tortor vehicula ac. Curabitur imperdiet massa ac ex pretium, et mollis metus aliquet. Phasellus...</p>
                                    <a href="post-without-image.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">READ MORE</a> 
                                </div>
                            </div>
                        </article>
                                </div>
                            </div>
                                  <div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
                            <div class="sc_section" data-animation="animated fadeInUp normal">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
                                  <h2 class="sc_title sc_title_regular margin_top_0">Latest Extensions</h2>
                                   <article class="post_item post_item_excerpt post_featured_right odd post type-post">
                            <div class="post_content clearfix">
                                <h4 class="post_title">
                                    <a href="post-without-image.html"><span class="post_icon icon-book-2"></span>New Post Without Image</a>
                                </h4>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">Posted 
                                        <a href="#" class="post_info_date">December 28, 2014</a>
                                    </span>
                                    <span class="post_info_item post_info_posted_by">by 
                                        <a href="#" class="post_info_author">John Doe</a>
                                    </span>
                                    <span class="post_info_item post_info_counters">    
                                        <a class="post_counters_item post_counters_views icon-eye" title="Views - 215" href="#">215</a>
                                        <a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 4" href="#">
                                            <span class="post_counters_number">4</span>
                                        </a>
                                        <a class="post_counters_item post_counters_likes icon-heart enabled inited" title="Like" href="#">
                                            <span class="post_counters_number">1</span>
                                        </a>
                                    </span>
                                </div>
                                <div class="post_descr">
                                    <p>Duis auctor arcu ac mi bibendum posuere. Integer diam orci, faucibus ut mi sed, tincidunt vehicula erat. Sed ultricies tempor nunc, nec malesuada tortor vehicula ac. Curabitur imperdiet massa ac ex pretium, et mollis metus aliquet. Phasellus...</p>
                                    <a href="post-without-image.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">READ MORE</a> 
                                </div>
                            </div>
                        </article>
                                </div>
                            </div>
                            <!-- /Video training section -->                        
                            
                        </section>
                    </article>
                </div>
            </div>
            <!-- /Content without sidebar -->
           
          
            <!-- Contacts Footer -->
            <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
                <div class="content_wrap">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="images/logo_footer.png" alt="">
                        </a>
                    </div>
                    <div class="contacts_address">
                        <address class="address_right">
                            Phone: 1.800.123.4567<br>
                            Fax: 1.800.123.4566
                        </address>
                        <address class="address_left">
                            San Francisco, CA 94102, US<br> 
                            1234 Some St
                        </address>
                    </div>
                    <div class="sc_socials sc_socials_size_big">
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_facebook">
                                <span class="sc_socials_hover social_facebook"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_pinterest">
                                <span class="sc_socials_hover social_pinterest"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_twitter">
                                <span class="sc_socials_hover social_twitter"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_gplus">
                                <span class="sc_socials_hover social_gplus"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_rss">
                                <span class="sc_socials_hover social_rss"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_dribbble">
                                <span class="sc_socials_hover social_dribbble"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /Contacts Footer -->
            <!-- Copyright -->
            <div class="copyright_wrap">
                <div class="content_wrap">
                    <p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Body -->
    <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
