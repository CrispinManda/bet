<?php
/**
/* Template Name: Addtips
 *
 * Displays Only Addtips template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>

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
                                          <a class='nav-link' href='index.html'>Home </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class='nav-link' href='about.html'>About us</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tipster
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <a class='dropdown-item' href='tipster.html'>Tipster</a>
                                            <a class='dropdown-item' href='tipster-details.html'>Tipster Details</a>
                                          </div>
                                        </li>
                                        <li class="nav-item">
                                          <a class='nav-link' href='subscription-plan.html'>Plans</a>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-none">
                                      <div class="space"></div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5">
                                      <ul class="navbar-nav">
                                        <li class="nav-item">
                                          <a class='nav-link' href='bookmakers.html'>Bookmakers</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class='dropdown-item' href='blog.html'>Blog Post</a>
                                            <a class='dropdown-item' href='blog-details.html'>Blog Details</a>
                                          </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <a class='dropdown-item' href='add-tips.html'>Add tips</a>
                                            <a class='dropdown-item' href='error.html'>Error 404</a>
                                            <a class='dropdown-item' href='faq.html'>faq</a>
                                            <a class='dropdown-item' href='login.html'>login</a>
                                            <a class='dropdown-item' href='registration.html'>registration</a>
                                            <a class='dropdown-item' href='terms-and-condition.html'>term & condition</a>
                                          </div>
                                        </li>
                                        <li class="nav-item">
                                          <a class='nav-link' href='contact.html'>Contact</a>
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

    <!-- breadcrumb begin -->
    <div class="breadcrumb-betipsta">
        <img class="shape" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/statics-bg.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="part-text">
                        <h2 class="title">Create a Tips</h2>
                        <ul>
                            <li>
                                <a href='index.html'>Home</a>
                            </li>
                            <li>
                                Create a tips
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

    <!-- add tips begin -->
    <div class="add-tips">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                  <div class="section-title">
                    <h4 class="sub-title">
                     Create a tips
                    </h4>
                    <h2>Share your probable thinking</h2>
                    <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                      and offers from leading bookmakers! See how it works!</p>
                  </div>
                </div>
              </div>
            <div class="primary-step">
                <form>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Select Bookmakers
                                </a>
                              
                                <div class="dropdown-menu-betipsta dropdown-menu bookmers-logo bookmakers" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#"><span class="number">1.</span><span class="text">BetAndOdds</span> </a>
                                  <a class="dropdown-item" href="#"><span class="number">2.</span><span class="text">GetBestOdd</span></a>
                                  <a class="dropdown-item" href="#"><span class="number">3.</span><span class="text">24Betting</span></a>
                                  <a class="dropdown-item" href="#"><span class="number">4.</span><span class="text">Betting777</span></a>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Select B/M Category
                                </a>
                              
                                <div class="dropdown-menu-betipsta dropdown-menu bkm-category" aria-labelledby="dropdownMenuLink2">
                                  <a class="dropdown-item" href="#">BetAndOdds Live</a>
                                  <a class="dropdown-item" href="#">BetAndOdds</a>
                                  <a class="dropdown-item" href="#">BetAndOdds Combo</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Select Your Sports
                                </a>
                              
                                <div class="dropdown-menu-betipsta dropdown-menu sports-logo select-sports" aria-labelledby="dropdownMenuLink3">
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-football"></i></span> <span class="text">Football</span> </a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-tennis-ball"></i></span> <span class="text">Tennis</span></a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-basketball-ball-variant"></i></span> <span class="text">Basketball</span></a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-ice-hockey"></i></span> <span class="text">Ice Hocky</span></a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-volleyball"></i></span> <span class="text">Volleyball</span></a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-badminton"></i></span> <span class="text">Badminton</span></a>
                                  <a class="dropdown-item" href="#"><span class="icon"><i class="flaticon-baseball"></i></span> <span class="text">Baseball</span></a>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Select Your Series
                                </a>
                              
                                <div class="dropdown-menu-betipsta dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                  <a class="dropdown-item" href="#">AFC - Champions League</a>
                                  <a class="dropdown-item" href="#">Belarus - Premier League</a>
                                  <a class="dropdown-item" href="#">Chile - Primera Division Corners</a>
                                  <a class="dropdown-item" href="#">AFC - Champions League</a>
                                  <a class="dropdown-item" href="#">Belarus - Premier League</a>
                                  <a class="dropdown-item" href="#">Chile - Primera Division Corners</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="prediction-select-step">
                <div class="single-game first-element">
                    <div class="row justify-content-between">
                        <div class="col-xl-1 col-lg-1 col-md-2">
                            <div class="part-icon">
                                <i class="flaticon-football"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="team">
                                <span class="single-team">I. England Super League</span>
                                <span class="single-team">II. Paraguya Kings XII</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="time">
                                <div>
                                    <span class="clock">10:30 am
                                        <span class="live-badge">LIVE</span></span>
                                    <span class="date">10/20/2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="prediction-sheet">
                                <ul>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                1.25
                                            </span>
                                            <span class="match-odds">England SL</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                4.30
                                            </span>
                                            <span class="match-odds">Draw</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                5.75
                                            </span>
                                            <span class="match-odds">Paraguya K</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-game">
                    <div class="row justify-content-between">
                        <div class="col-xl-1 col-lg-1 col-md-2">
                            <div class="part-icon">
                                <i class="flaticon-football"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="team">
                                <span class="single-team">I. England Super League</span>
                                <span class="single-team">II. Paraguya Kings XII</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="time">
                                <div>
                                    <span class="clock">10:30 am
                                        <span class="live-badge">LIVE</span></span>
                                    <span class="date">10/20/2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="prediction-sheet">
                                <ul>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                1.25
                                            </span>
                                            <span class="match-odds">England SL</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                4.30
                                            </span>
                                            <span class="match-odds">Draw</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                5.75
                                            </span>
                                            <span class="match-odds">Paraguya K</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-game">
                    <div class="row justify-content-between">
                        <div class="col-xl-1 col-lg-1 col-md-2">
                            <div class="part-icon">
                                <i class="flaticon-football"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="team">
                                <span class="single-team">I. England Super League</span>
                                <span class="single-team">II. Paraguya Kings XII</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="time">
                                <div>
                                    <span class="clock">10:30 am
                                        <span class="live-badge">LIVE</span></span>
                                    <span class="date">10/20/2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="prediction-sheet">
                                <ul>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                1.25
                                            </span>
                                            <span class="match-odds">England SL</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                4.30
                                            </span>
                                            <span class="match-odds">Draw</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <span class="prediction-amount">
                                                5.75
                                            </span>
                                            <span class="match-odds">Paraguya K</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="publish-step">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-header">
                            <div class="left">
                                <span class="team">I. England Super League</span>
                                <span class="vs">Vs</span>
                                <span class="team">II. Paraguya Kings XII</span>
                            </div>
                            <div class="right">
                                <span class="match-odds">Draw</span>
                                <span class="prediction-amount">/ 4.30</span>
                            </div>
                        </div>
                        <div class="part-analysis">
                            <label for="analysis">Write match analysis-</label>
                            <textarea id="analysis" placeholder="It's optional..."></textarea>
                        </div>
                        <div class="part-footer">
                            <div class="privacy">
                                <form>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input betipsta-radio" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Free</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input betipsta-radio" checked type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Premium</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input betipsta-radio" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Unlisted</label>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center justify-content-center">
                        <div class="part-right">
                            <div class="stake">
                                <button id="#stake-increase"><i class="fas fa-plus"></i></button>
                                <span class="stake-number">0</span>
                                <button id="#stake-decrease"><i class="fas fa-minus"></i></button>
                            </div>
                            <button class="publish-btn">Publish Your Tips</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add tips end -->

<?php get_footer()?>