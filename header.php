<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from betipster.netlify.app/live/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2024 11:03:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Betipstar - Prediction Tips and Tipster HTML Template</title>
      <!-- favicon -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <!-- bootstrap -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/bootstrap.min.css">
      <!-- fontawesome icon  -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/fontawesome.min.css">
      <!-- animate.css -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/animate.css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/owl.carousel.css">
      <!-- stylesheet -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/style.css">
      <!-- responsive -->
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/responsive.css">
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="0">

      <!-- preloader begin -->
      <div class="preloader">
          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/preloader.gif" alt="">
      </div>
      <!-- preloader end -->

      <!-- header begin -->
      <div class="header">
        <div class="header-top">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-5 col-lg-5 col-md-7">
                <div class="support-info">
                  <ul>
                    <li>
                      <span class="icon">
                        <i class="far fa-envelope"></i>
                      </span>
                      <span class="text">
                        yourmail@domain.com
                      </span>
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fas fa-phone"></i>
                      </span>
                      <span class="text">
                        +880 1952 000000
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-none">
                <div class="logo">
                    <a href='index.html'>
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo1.png" alt="">
                    </a>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="date">
                  <ul>
                    <li>
                      <span class="icon">
                        <i class="fas fa-calendar-alt"></i>
                      </span>
                      <span class="text">
                        <span id="date"></span>
                        <span id="month"></span>
                        <span id="year"></span>
                      </span>
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fas fa-clock"></i>
                      </span>
                      <span class="text">
                        <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom">
          <div class="container">
            <div class="row d-xl-none d-lg-none d-flex">
              <div class="col-8">
                <a class='mobile-logo' href='index.html'>
                  <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo.png" alt="">
                  Betiptar
                </a>
              </div>
              <div class="col-4 d-flex align-items-center justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg>
                </button>
              </div>
            </div>
              <div class="row justify-content-center">
                  <div class="col-xl-12 col-lg-12">
                      <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="scalaction">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <ul class="navbar-nav">
                                                <li class="nav-item active">
                                                    <a class='nav-link' href='<?php echo esc_url(home_url('/')); ?>'>Home </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class='nav-link' href='<?php echo esc_url(home_url('/about')); ?>'>About us</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tipster
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/tipster')); ?>'>Tipster</a>
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/tipster-details')); ?>'>Tipster Details</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class='nav-link' href='<?php echo esc_url(home_url('/subscription-plan')); ?>'>Plans</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-none">
                                            <div class="space"></div>
                                        </div>
                                        <div class="col-xl-5 col-lg-5">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class='nav-link' href='<?php echo esc_url(home_url('/bookmakers')); ?>'>Bookmakers</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Blog
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/blog')); ?>'>Blog Post</a>
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/blog-details')); ?>'>Blog Details</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Pages
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/add-tips')); ?>'>Add tips</a>
                                                        <!-- <a class='dropdown-item' href='<?php// echo esc_url(home_url('/error')); ?>'>Error 404</a> -->
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/faq')); ?>'>FAQ</a>
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('login')); ?>'>Login</a>
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/register')); ?>'>Register</a>
                                                        <a class='dropdown-item' href='<?php echo esc_url(home_url('/terms-and-condition')); ?>'>Terms & Condition</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class='nav-link' href='<?php echo esc_url(home_url('/contact')); ?>'>Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!-- header end -->
