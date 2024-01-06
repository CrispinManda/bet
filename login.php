<?php
/**
/* Template Name: Login
 *
 * Displays Only Login template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
      <!-- header end -->

    <!-- breadcrumb begin -->
    <div class="breadcrumb-betipsta">
        <img class="shape" src="<?php echo esc_url(get_template_directory_uri());?>//img/statics/statics-bg-2.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="part-text">
                        <h2 class="title">User login</h2>
                        <ul>
                            <li>
                                <a href='<?php echo esc_url(home_url('/')); ?>'>Home</a>
                            </li>
                            <li>
                                User login
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

    <!-- register begin -->
    <div class="register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-9">
                    <div class="section-title">
                    <h4 class="sub-title">
                        Login To Enter
                    </h4>
                    <h2>Enter into your account</h2>
                    <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                        and offers from leading bookmakers! See how it works!</p>
                    </div>
                </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="reg-body login">
                            <form>
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="bottom-part">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7 d-xl-flex d-lg-flex d-block align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios5" value="option2">
                                                <label class="form-check-label" for="exampleRadios5">
                                                    Remember password
                                                </label>
                                                <p>
                                                    <a class='sign-up' href='registration.html'>Create a account</a>
                                                    <a href='registration.html'>Forgot password?</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 text-right">
                                            <button class="def-btn btn-form">Login<i class="fas fa-arrow-right"></i></button>  
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- register end -->

    <!-- footer begin -->
<?php get_footer()?>