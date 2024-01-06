<?php get_header(); ?>

    <!-- breadcrumb begin -->
    <div class="breadcrumb-betipsta">
        <img class="shape" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/statics-bg.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="part-text">
                        <h2 class="title">Error 404</h2>
                        <ul>
                            <li>
                                <a href='index.html'>Home</a>
                            </li>
                            <li>
                                Error 404
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="part-img">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    
    <!-- error begin -->
    <div class="error">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="part-img">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/error.png" alt="">
                    </div>
                    <div class="part-text">
                        <h4>Sorry, This page was not found!</h4>
                        <a href="#" class="back-to-home-btn">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error end -->
    
 <?php get_footer()?>
