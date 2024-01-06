

<?php
/**
/* Template Name: About
 *
 * Displays Only About template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
    <!-- header end -->

    <!-- breadcrumb begin -->
    <div class="breadcrumb-betipsta">
        <img class="shape" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/statics-bg-2.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="part-text">
                        <h2 class="title">About Us</h2>
                        <ul>
                            <li>
                                <a href='index.html'>Home</a>
                            </li>
                            <li>
                                About Us
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

     <!-- about begin -->
     <div class="about">
        <div class="container">
          <div class="row justify-content-xl-around justify-content-lg-between justify-content-md-center">
            <div class="col-xl-6 col-lg-7 col-md-9 d-xl-flex d-lg-flex d-block align-items-center">
              <div class="part-text">
                <h4 class="subtitle">Know About Us</h4>
                <h2>Get profit from our Tipster </h2>
                <p>We believe that Betipter is the most extensive betting platform available for all kind of sports bettors, who are really wanting to bet on online betting site. We’ve built tools that help provide responsibility to your betting decisions.</p><p>We've highlighted your personal strengths and weaknesses, as well as providing knowledgeable tipsters that would compliment your existing betting portfolio.</p>
                <a href="#0" class="learn-more-btn">Learn More</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5">
              <div class="part-img">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/about.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- about end -->
      
      <!-- statics begin -->
      <div class="statics">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/statics-bg.png" alt="" class="shape">
        <div class="container">
              <div class="part-statics">
                <div class="row">
                  <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                    <div class="single-static">
                      <div class="part-img">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/icon-1.png" alt="">
                      </div>
                      <div class="part-text">
                        <span class="number">14,202</span>
                        <h4 class="title">Total Profit</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                    <div class="single-static">
                      <div class="part-img">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/icon-2.png" alt="">
                      </div>
                      <div class="part-text">
                        <span class="number">56.7%</span>
                        <h4 class="title">Avr. Hit Rate</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                    <div class="single-static">
                      <div class="part-img">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/icon-3.png" alt="">
                      </div>
                      <div class="part-text">
                        <span class="number">120.2%</span>
                        <h4 class="title">Avarage Roi</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-sm-6 col-md-3">
                    <div class="single-static">
                      <div class="part-img">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/statics/icon-4.png" alt="">
                      </div>
                      <div class="part-text">
                        <span class="number">7500</span>
                        <h4 class="title">Total Tipster</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <!-- statics end -->

      <!-- leaderboard begin  -->
      <div class="leaderboard">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
              <div class="section-title">
                <h4 class="sub-title">
                  Tipster Rankings
                </h4>
                <h2>Our most profited tipster</h2>
                <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                  and offers from leading bookmakers! See how it works!</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
              <div class="leaderboard-table">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Rank</th>
                      <th scope="col">Tipster</th>
                      <th scope="col">Profit</th>
                      <th scope="col">Roi</th>
                      <th scope="col">Strike Rate</th>
                      <th scope="col">Avr. Odds</th>
                      <th scope="col">Price Per Tips</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/rank/one.png" class="ranked-sticker" alt="">
                      </th>
                      <td>
                        <a href="#0" class="tipster-pic">
                          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/people/team-member-8.jpg" alt="">
                        </a>
                      </td>
                      <td>
                        <span class="profit">
                          +20612.12
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          31.4%
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          35%
                        </span>
                      </td>
                      <td>
                        <span class="single-data"> 
                          7.66
                        </span>
                      </td>
                      <td>
                        <a href="#0" class="buy-tips-btn">
                          Buy tips from $21
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/rank/two.png" class="ranked-sticker" alt="">
                      </th>
                      <td>
                        <a href="#0" class="tipster-pic">
                          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/people/team-member-7.jpg" alt="">
                        </a>
                      </td>
                      <td>
                        <span class="profit">
                          +20612.12
                        </span>
                      </td><td>
                        <span class="single-data">
                          31.4%
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          35%
                        </span>
                      </td>
                      <td>
                        <span class="single-data"> 
                          7.66
                        </span>
                      </td>
                      <td>
                        <a href="#0" class="buy-tips-btn">
                          Buy tips from $20
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/rank/three.png" class="ranked-sticker" alt="">
                      </th>
                      <td>
                        <a href="#0" class="tipster-pic">
                          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/people/team-member-6.jpg" alt="">
                        </a>
                      </td>
                      <td>
                        <span class="profit">
                          +20612.12
                        </span>
                      </td><td>
                        <span class="single-data">
                          31.4%
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          35%
                        </span>
                      </td>
                      <td>
                        <span class="single-data"> 
                          7.66
                        </span>
                      </td>
                      <td>
                        <a href="#0" class="buy-tips-btn">
                          Buy tips from $15
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        4<span class="rank-number"> th</span>
                      </th>
                      <td>
                        <a href="#0" class="tipster-pic">
                          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/people/team-member-4.jpg" alt="">
                        </a>
                      </td>
                      <td>
                        <span class="profit">
                          +20612.12
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          31.4%
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          35%
                        </span>
                      </td>
                      <td>
                        <span class="single-data"> 
                          7.66
                        </span>
                      </td>
                      <td>
                        <a href="#0" class="buy-tips-btn">
                          Buy tips from $33
                        </a>  
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        5<span class="rank-number"> th</span>
                      </th>
                      <td>
                        <a href="#0" class="tipster-pic">
                          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/people/team-member-5.jpg" alt="">
                        </a>
                      </td>
                      <td>
                        <span class="profit">
                          +20612.12
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          31.4%
                        </span>
                      </td>
                      <td>
                        <span class="single-data">
                          35%
                        </span>
                      </td>
                      <td>
                        <span class="single-data"> 
                          7.66
                        </span>
                      </td>
                      <td>
                        <a href="#0" class="buy-tips-btn">
                          Buy tips from $11
                        </a>  
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- leaderboard end  -->

      <!-- testimonial begin -->
      <div class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-10">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="single-testimonial">
                            <div class="part-img">
                              <div class="part-pic">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/comment-user-2.jpg" alt="">
                              </div>
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="part-img">
                              <div class="part-pic">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/comment-user-2.jpg" alt="">
                              </div>
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="part-img">
                                
                              <div class="part-pic">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/comment-user-3.jpg" alt="">
                              </div>
                            </div>
                            <div class="part-text">
                                <i class="icon-for-quot fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt dignissimos laborum praesentium illo dolorem, fuga commodi? Laudantium totam porro quod nihil eius!</p>
                                <span class="position">
                                    Player
                                </span>
                                <span class="user-name">
                                    Illustino Calibia
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- testimonial end -->

       <!-- available-countries begin -->
       <div class="available-countries">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
              <div class="section-title">
                <h4 class="sub-title">
                  Countries Where We're Available
                </h4>
                <h2>We're spread all over the world</h2>
                <p>Get probable winning tips from professional betting tipsters across  all sports<br/>
                  and offers from leading bookmakers! See how it works!</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-xl-start justify-content-lg-center justify-content-start">
            <div class="col-xl-4 col-lg-4">
              <div class="part-img">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/global.png" alt="">
              </div>
            </div>
            <div class="col-xl-7 col-lg-9">
              <div class="flags">
                <div class="row">
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/001-united-kingdom.png" alt="">
                      <span>united kingdom</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/003-germany.png" alt="">
                      <span>germany</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/002-united-states.png" alt="">
                      <span>united states</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/004-brazil.png" alt="">
                      <span>brazil</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/005-sweden.png" alt="">
                      <span>sweden</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/006-canada.png" alt="">
                      <span>canada</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/007-portugal.png" alt="">
                      <span>portugal</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/008-ireland.png" alt="">
                      <span>ireland</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/009-south-africa.png" alt="">
                      <span>south africa</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/010-israel.png" alt="">
                      <span>israel</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/011-saudi-arabia.png" alt="">
                      <span>saudi arabia</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/012-bangladesh.png" alt="">
                      <span>bangladesh</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/013-mauritania.png" alt="">
                      <span>mauritania</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/016-bhutan.png" alt="">
                      <span>bhutan</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/017-tonga.png" alt="">
                      <span>tonga</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/014-niger.png" alt="">
                      <span>niger</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/015-norfolk-island.png" alt="">
                      <span>norfolk island</span>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-3 col-sm-2">
                    <div class="single-flag">
                      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/flag/020-nepal.png" alt="">
                      <span>nepal</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- available-countries end -->

    <!-- footer begin -->

<?php get_footer()?>