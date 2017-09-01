<!DOCTYPE html>
<html>

<head>
  <title>
    <?php $this->view->title; ?>
  </title>
  <?php $this->view->include('head') ?>
</head>

<body>
  <div class="body-wrapper" style="position: static;">
    <?php
    $this->view->include('header')
    ?>

    <!-- CONTENT AREA -->

    <!--Breadcrumb Section Start-->
    <!-- <section class="breadcrumb-bg light-bg " style="height: 400px;">
      <div class="theme-container container">
        <div class="site-breadcumb col-md-5">

        </div>
      </div>
    </section> -->
    <!--Breadcrumb Section End-->
    <main>
    <section class="wrapper">
      <div class="theme-container container ">
        <div class="row">
          <!-- Product Categories Sidebar Starts -->
          <aside class="sidebar-3 col-sm-4 col-md-3 ">

            <div class="widget-wrap">
              <div class="widget-search">
                <input type="text" placeholder="Search" class="form-control">
                <button><i class="fa fa-search"></i></button>
              </div>
            </div>

            <div class="widget-wrap">
              <h2 class="widget-title"> CATEGORIES </h2>
              <div class="widget-content">
                <div class="panel-group panel-style-1" id="accordion">
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#cat-1">
                          Clothing <i class="indicator icon_plus-box  pull-right"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="cat-1" class="panel-collapse collapse">
                      <ul>
                        <li> <a href="#"> Ethnic Wear <span>12</span> </a> </li>
                        <li> <a href="#"> Jackets &amp; Coats <span>12</span> </a> </li>
                        <li> <a href="#"> Denim <span>12</span> </a> </li>
                        <li> <a href="#"> Pants <span>12</span> </a> </li>
                        <li> <a href="#"> Shorts <span>12</span> </a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle title-1" data-toggle="collapse" data-parent="#accordion" href="#cat-2">
                          Footwears <i class="indicator icon_plus-box  pull-right"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="cat-2" class="panel-collapse collapse">
                      <ul>
                        <li> <a href="#"> Flats <span>12</span> </a> </li>
                        <li> <a href="#"> Heels <span>12</span> </a> </li>
                        <li> <a href="#"> Wedges <span>12</span> </a> </li>
                        <li> <a href="#"> Bellies <span>12</span> </a> </li>
                        <li> <a href="#"> Boots <span>12</span> </a> </li>
                        <li> <a href="#"> Pumps <span>12</span> </a> </li>
                        <li> <a href="#"> Sports <span>12</span> </a> </li>
                        <li> <a href="#"> Casual Shoes <span>12</span> </a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle title-1" data-toggle="collapse" data-parent="#accordion" href="#cat-3">
                          Bags, Blets & wallets <i class="indicator icon_plus-box  pull-right"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="cat-3" class="panel-collapse collapse">
                      <ul>
                        <li> <a href="#"> Handbags <span>12</span> </a> </li>
                        <li> <a href="#"> Sling Bags <span>12</span> </a> </li>
                        <li> <a href="#"> Wallets & Belts <span>12</span> </a> </li>
                        <li> <a href="#"> Totes <span>12</span> </a> </li>
                        <li> <a href="#"> Clutches <span>12</span> </a> </li>
                        <li> <a href="#"> Premium Brands <span>12</span> </a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle title-1" data-toggle="collapse" data-parent="#accordion" href="#cat-4">
                          Jewellery <i class="indicator icon_plus-box  pull-right"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="cat-4" class="panel-collapse collapse">
                      <ul>
                        <li> <a href="#"> Rings <span>12</span> </a> </li>
                        <li> <a href="#"> Earrings <span>12</span> </a> </li>
                        <li> <a href="#"> Precious Jwellery <span>12</span> </a> </li>
                        <li> <a href="#"> Jewellery Sets <span>12</span> </a> </li>
                        <li> <a href="#"> Pendants & Lockets <span>12</span> </a> </li>
                        <li> <a href="#"> Bracelet <span>12</span> </a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle title-1" data-toggle="collapse" data-parent="#accordion" href="#cat-5">
                          Beauty & Wellness <i class="indicator icon_plus-box  pull-right"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="cat-5" class="panel-collapse collapse">
                      <ul>
                        <li> <a href="#"> Make Up <span>12</span> </a> </li>
                        <li> <a href="#"> Skin Care <span>12</span> </a> </li>
                        <li> <a href="#"> Hair Care <span>12</span> </a> </li>
                        <li> <a href="#"> Deodorants <span>12</span> </a> </li>
                        <li> <a href="#"> Bath & Body <span>12</span> </a> </li>
                        <li> <a href="#"> Premium Brands <span>12</span> </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="widget-wrap">
              <h2 class="widget-title"> Colors </h2>
              <div class="widget-content widget-colors">
                <a href="#" class="white"> <span></span> </a>
                <a href="#" class="black"> <span></span> </a>
                <a href="#" class="orange"> <span></span> </a>
                <a href="#" class="violet"> <span></span> </a>
                <a href="#" class="blue"> <span></span> </a>
                <a href="#" class="green"> <span></span> </a>
                <a href="#" class="pink"> <span></span> </a>
                <a href="#" class="gray"> <span></span> </a>
              </div>
            </div>

            <div class="widget-wrap">
              <h2 class="widget-title"> FILTER SELECTION </h2>
              <div class="widget-content slider-range-3">
                <h2 class="title">Price</h2>
                <div id="slider-range" class="slider-range"></div>
                <button class="btn btn-black">Filter</button> <input type="text" id="amount" readonly />
              </div>
            </div>

            <div class="widget-wrap">
              <h2 class="widget-title"> recent products </h2>
              <div class="widget-content">
                <div class="recent-prod-slider">
                  <div class="item">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img alt="" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" class="img-responsive"> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img alt="" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" class="img-responsive"> </a>
                            </div>
                            <div class="new-tag right"> <span> new </span> </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-cart"></i> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a data-toggle="modal" href="#product-preview"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a class="title" href="#"> aldo black leather shoes </a></div>
                          <div class="rating">
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star half"></span>
                          </div>
                          <div class="caption-text"> <span>$78.90 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#">
                                <img alt="" src="<?php echo STATICPATH ?>images/main/product/prod-13.jpg" class="img-responsive">
                              </a>
                            </div>
                            <div class="back">
                              <a href="#">
                                <img alt="" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" class="img-responsive">
                              </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-cart"></i> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a data-toggle="modal" href="#product-preview"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a class="title" href="#"> clark leather shoes </a></div>
                          <div class="rating">
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star half"></span>
                          </div>
                          <div class="caption-text"> <span> $75.70 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="widget-wrap">
              <div class="widget-content">
                <ul id="tabs" class="sidebar-tabs">
                  <li><a href="#tab-s1" data-toggle="tab">Top</a></li>
                  <li class="active"><a href="#tab-s2" data-toggle="tab">Sale Off</a></li>
                  <li><a href="#tab-s3" data-toggle="tab">Deals</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade" id="tab-s1">
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-2.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">white beard t-shirt</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $45.05 </span> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-5.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">aldo leather shoes</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $67.05 </span> <del class="gray-color size-10"> $102.50 </del> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-6.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">gucci sunglasses</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $105.20 </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade active in" id="tab-s2">
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-5.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">white beard t-shirt</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $45.05 </span> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-6.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">aldo leather shoes</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $67.05 </span> <del class="gray-color size-10"> $102.50 </del> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-2.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">gucci sunglasses</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $105.20 </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-s3">
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-6.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">white beard t-shirt</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $45.05 </span> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-5.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">aldo leather shoes</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $67.05 </span> <del class="gray-color size-10"> $102.50 </del> </div>
                      </div>
                    </div>
                    <div class="recent-wrap">
                      <div class="col-md-4 col-sm-5 recent-slide-img">
                        <div class="light-bg">
                          <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-thumb-2.jpg" alt=""/> </a>
                        </div>
                      </div>
                      <div class="col-md-8  col-sm-7 no-padding recent-slide-des">
                        <div class="caption-title"><a href="#">gucci sunglasses</a></div>
                        <div class="rating">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star half"></span>
                        </div>
                        <div class="caption-text"> <span> $105.20 </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="widget-wrap">
              <h2 class="widget-title"> popular tags </h2>
              <div class="widget-content tag-cloud">
                <a href="#"> Envato</a>
                <a href="#"> WordPress</a>
                <a href="#"> Mutilpurpose</a>
                <a href="#"> Site</a>
                <a href="#"> Portfolio</a>
                <a href="#"> Creative</a> <a href="#"> PSD Template</a> <a href="#"> PSD Template</a>
                <a href="#"> Best</a> <a href="#"> fashion</a> <a href="#"> Shop Online</a>
              </div>
            </div>
          </aside>
          <!-- Product Categories Sidebar Starts -->

          <!-- Product Starts -->
          <aside class="col-sm-8 col-md-8   prod-categories cat-with-sidebar">

            <div class="row " style="height: 100px;">
              <div class="col-md-6 col-sm-5 col-xs-3 show-result">
                <h2 class="title"> show all 11 results </h2>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-5 sorter">
                <form action="#" class="form-wrap">
                  <div class="search-selectpicker selectpicker-wrapper">
                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Sort By">
                      <option>A - Z</option>
                      <option>Z - A</option>
                      <option> Low - High </option>
                      <option> High - Low </option>
                    </select>
                  </div>
                </form>
              </div>

              <div class="col-md-2 col-sm-3 col-xs-4 view-wrap">
                <ul class="nav-tabs tabination view-tabs">
                  <li class="active">
                    <a href="#grid-view" data-toggle="tab">
                      <i class="icon_grid-2x2" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="">
                    <a href="#list-view" data-toggle="tab"><i class="icon_ul"></i></a>
                  </li>
                </ul>
              </div>

            </div>

            <div class="tab-content">
              <!-- Product Grid View Starts -->
              <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                <div class="row text-center">
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-1.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title">white beard t-shirt</a></div>
                          <div class="caption-text"> <span> $45.05 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-9.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-7.jpg" alt=""/>  </a>
                            </div>
                            <div class="sale-tag right"> <span> sale </span> </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title">aldo leather shoes</a></div>
                          <div class="caption-text"> <span> $67.05 </span> <del> $102.50 </del> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-10.jpg" alt=""/>
                              </a>
                            </div>
                            <div class="back">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" alt=""/>
                              </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> barbour grey t-shirt </a></div>
                          <div class="caption-text"> <span> $65.00 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                            </div>
                            <div class="new-tag right"> <span> new </span> </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> aldo black leather shoes </a></div>
                          <div class="caption-text"> <span>$78.90 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-7.jpg" alt=""/>  </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> penfield blue t-shirt </a></div>
                          <div class="caption-text"> <span> $54.00 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-7.jpg" alt=""/>
                              </a>
                            </div>
                            <div class="back">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" alt=""/>
                              </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> gucci roung sunglasses </a></div>
                          <div class="caption-text"> <span> $105.20 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-11.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> line white & black t-shirt </a></div>
                          <div class="caption-text"> <span> $50.00 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-12.jpg" alt=""/> </a>
                            </div>
                            <div class="back">
                              <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-7.jpg" alt=""/>  </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> rayban round sunglasses </a></div>
                          <div class="caption-text"> <span> $120.15 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 cate-box">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="thumbnail-img light-bg">
                          <div class="flipper">
                            <div class="front">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-13.jpg" alt=""/>
                              </a>
                            </div>
                            <div class="back">
                              <a href="#">
                                <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" alt=""/>
                              </a>
                            </div>
                          </div>
                          <ul class="thumbnail-content hover-style1 list-items">
                            <li> <a href="#"> <i class="icon ion-android-add"></i> <span> Add To Cart </span> </a> </li>
                            <li> <a href="#"> <i class="icon ion-ios-heart-outline"></i> </a> </li>
                            <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> </a> </li>
                          </ul>
                        </div>
                        <div class="caption">
                          <div class="caption-title"><a href="#" class="title"> clark leather shoes </a></div>
                          <div class="caption-text"> <span> $75.70 </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagination-wrapper">
                  <ul class="pagination-list">
                    <li class="prev"> <a href="#"> <i class="arrow_carrot-2left"></i> </a> </li>
                    <li> <a href="#"> 1 </a> </li>
                    <li class="active"> 2 </li>
                    <li> <a href="#"> 3 </a> </li>
                    <li> <a href="#"> 4 </a> </li>
                    <li> <a href="#"> 5 </a> </li>
                    <li class="nxt"> <a href="#"> <i class="arrow_carrot-2right"></i> </a> </li>
                  </ul>
                </div>
              </div>
              <!-- Product Grid View Ends -->
              <!-- Product List View Starts -->
              <div id="list-view" class="tab-pane fade" role="tabpanel">
                <div class="cat-list-view">
                  <div class="row">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="col-md-4 col-sm-12">
                          <div class="thumbnail-img light-bg">
                            <div class="flipper">
                              <div class="front">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-2.jpg" alt=""/> </a>
                              </div>
                              <div class="back">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                              </div>
                            </div>
                            <ul class="thumbnail-content hover-style1 list-items">
                              <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> Quick View </a> </li>
                              <li> <a href="#"> <i class="icon ion-android-favorite-outline"></i> Wishlist </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="product-content">
                            <div class="product-heading">
                              <a href="#" class="title">white beard t-shirt</a>
                            </div>
                            <div class="rating">
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star half"></span>
                            </div>

                            <div class="product-price">
                              <p class="caption-text">
                                <span> $45.05 </span>
                                <del>  </del>
                              </p>
                            </div>

                            <div class="product-availability">
                              <ul class="stock-detail list-items">
                                <li class=""> <i class="icon-layers icons"></i> <span> Only <b>15</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                <li>Available:<span class="green-color"> In Stock </span> </li>
                              </ul>
                            </div>

                            <hr class="fullwidth-divider">

                            <div class="product-description">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum eros idoni rutrum fermentum. Proin nec felis dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            </div>

                            <div class="product-size row">
                              <form class="product-form">
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Color ">
                                      <option>Pink</option>
                                      <option>Blue</option>
                                      <option>Marooon</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Size">
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>M</option>
                                  </select>
                                </div>
                                <div class="form-group col-sm-4 prod-btns">
                                  <div class="quantity">
                                    <button class="btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                    <button class="btn plus"><i class="icon_plus"></i></button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="prod-btns">
                              <div class="add-to-cart">
                                <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cat-list-view">
                  <div class="row">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="col-md-4 col-sm-12">
                          <div class="thumbnail-img light-bg">
                            <div class="flipper">
                              <div class="front">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-5.jpg" alt=""/> </a>
                              </div>
                              <div class="back">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                              </div>
                            </div>
                            <ul class="thumbnail-content hover-style1 list-items">
                              <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> Quick View </a> </li>
                              <li> <a href="#"> <i class="icon ion-android-favorite-outline"></i> Wishlist </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="product-content">
                            <div class="product-heading">
                              <h2 class="title">aldo leather shoes</h2>
                            </div>
                            <div class="rating">
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star half"></span>
                              <div class="product-review">
                                <ul class="list-items">
                                  <li>04 Review(s) </li>
                                  <li> <a href="#"> Add Your Review </a> </li>
                                </ul>
                              </div>
                            </div>

                            <div class="product-price">
                              <p class="caption-text">
                                <span> $67.05 </span>
                                <del> $102.05 </del>
                              </p>
                            </div>

                            <div class="product-availability">
                              <ul class="stock-detail list-items">
                                <li class=""> <i class="icon-layers icons"></i> <span> Only <b>15</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                <li>Available:<span class="green-color"> In Stock </span> </li>
                              </ul>
                            </div>

                            <hr class="fullwidth-divider">

                            <div class="product-description">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum eros idoni rutrum fermentum. Proin nec felis dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            </div>

                            <div class="product-size row">
                              <form class="product-form">
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Color ">
                                      <option>Pink</option>
                                      <option>Blue</option>
                                      <option>Marooon</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Size">
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>M</option>
                                  </select>
                                </div>
                                <div class="form-group col-sm-4 prod-btns">
                                  <div class="quantity">
                                    <button class="btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                    <button class="btn plus"><i class="icon_plus"></i></button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="prod-btns">
                              <div class="add-to-cart">
                                <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="cat-list-view">
                  <div class="row">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="col-md-4 col-sm-12">
                          <div class="thumbnail-img light-bg">
                            <div class="flipper">
                              <div class="front">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-11.jpg" alt=""/> </a>
                              </div>
                              <div class="back">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                              </div>
                            </div>
                            <ul class="thumbnail-content hover-style1 list-items">
                              <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> Quick View </a> </li>
                              <li> <a href="#"> <i class="icon ion-android-favorite-outline"></i> Wishlist </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="product-content">
                            <div class="product-heading">
                              <a href="#" class="title">line white & black t-shirt</a>
                            </div>
                            <div class="rating">
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star half"></span>
                            </div>

                            <div class="product-price">
                              <p class="caption-text">
                                <span> $50.00 </span>
                                <del>  </del>
                              </p>
                            </div>

                            <div class="product-availability">
                              <ul class="stock-detail list-items">
                                <li class=""> <i class="icon-layers icons"></i> <span> Only <b>15</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                <li>Available:<span class="green-color"> In Stock </span> </li>
                              </ul>
                            </div>

                            <hr class="fullwidth-divider">

                            <div class="product-description">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum eros idoni rutrum fermentum. Proin nec felis dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            </div>

                            <div class="product-size row">
                              <form class="product-form">
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Color ">
                                      <option>Pink</option>
                                      <option>Blue</option>
                                      <option>Marooon</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Size">
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>M</option>
                                  </select>
                                </div>
                                <div class="form-group col-sm-4 prod-btns">
                                  <div class="quantity">
                                    <button class="btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                    <button class="btn plus"><i class="icon_plus"></i></button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="prod-btns">
                              <div class="add-to-cart">
                                <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cat-list-view">
                  <div class="row">
                    <div class="thumbnail-wrap">
                      <div class="thumbnail">
                        <div class="col-md-4 col-sm-12">
                          <div class="thumbnail-img light-bg">
                            <div class="flipper">
                              <div class="front">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-12.jpg" alt=""/> </a>
                              </div>
                              <div class="back">
                                <a href="#"> <img class="img-responsive" src="<?php echo STATICPATH ?>images/main/product/prod-6.jpg" alt=""/> </a>
                              </div>
                            </div>
                            <ul class="thumbnail-content hover-style1 list-items">
                              <li> <a href="#product-preview" data-toggle="modal"> <i class="icon ion-ios-eye-outline"></i> Quick View </a> </li>
                              <li> <a href="#"> <i class="icon ion-android-favorite-outline"></i> Wishlist </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="product-content">
                            <div class="product-heading">
                              <a href="#" class="title"> rayban round sunglasses </a>
                            </div>
                            <div class="rating">
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star active"></span>
                              <span class="star half"></span>
                            </div>

                            <div class="product-price">
                              <p class="caption-text">
                                <span> $102.15 </span>
                                <del>  </del>
                              </p>
                            </div>

                            <div class="product-availability">
                              <ul class="stock-detail list-items">
                                <li class=""> <i class="icon-layers icons"></i> <span> Only <b>15</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                <li>Available:<span class="green-color"> In Stock </span> </li>
                              </ul>
                            </div>

                            <hr class="fullwidth-divider">

                            <div class="product-description">
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum eros idoni rutrum fermentum. Proin nec felis dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            </div>
                            <div class="product-size row">
                              <form class="product-form">
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Color ">
                                      <option>Pink</option>
                                      <option>Blue</option>
                                      <option>Marooon</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group selectpicker-wrapper col-sm-4">
                                  <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Select Size">
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>M</option>
                                  </select>
                                </div>
                                <div class="form-group col-sm-4 prod-btns">
                                  <div class="quantity">
                                    <button class="btn minus"><i class="icon_minus-06"></i></button>
                                    <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                                    <button class="btn plus"><i class="icon_plus"></i></button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="prod-btns">
                              <div class="add-to-cart">
                                <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color size-24"></i> Add to Cart </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product List View Ends -->
            </div>
          </aside>
          <!-- / Product Ends -->
        </div>
      </div>

    </section>
    <!-- / CONTENT AREA -->

    </main>
    <!-- /WRAPPER -->

    <!-- Product Preview Popup -->
    <section class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg product-modal">
        <div class="modal-content">
          <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close icon_close" href="#"></a>
          <!-- Single Products Slider Starts -->
          <div class="col-md-6">
            <!-- Main Slider Start -->
            <div class="owl-carousel prod-slider sync1">
              <div class="item">
                <img src="<?php echo STATICPATH ?>images/main/popup/prod-1.jpg" alt="">
                <a href="<?php echo STATICPATH ?>images/main/popup/prod-1.jpg" data-gal="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
              </div>
              <div class="item">
                <img src="<?php echo STATICPATH ?>images/main/popup/prod-2.jpg" alt="">
                <a href="<?php echo STATICPATH ?>images/main/popup/prod-1.jpg" data-gal="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
              </div>
              <div class="item">
                <img src="<?php echo STATICPATH ?>images/main/popup/prod-3.jpg" alt="">
                <a href="<?php echo STATICPATH ?>images/main/popup/prod-3.jpg" data-gal="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
              </div>
              <div class="item">
                <img src="<?php echo STATICPATH ?>images/main/popup/prod-4.jpg" alt="">
                <a href="<?php echo STATICPATH ?>images/main/popup/prod-4.jpg" data-gal="prettyPhoto[gallery2]" title="Product" class="caption-link"><i class="fa fa-arrows-alt"></i></a>
              </div>
            </div>

            <div class="owl-carousel sync2">
              <div class="item"> <img src="<?php echo STATICPATH ?>images/main/popup/prod-thumb-1.jpg" alt=""> </div>
              <div class="item"> <img src="<?php echo STATICPATH ?>images/main/popup/prod-thumb-2.jpg" alt=""> </div>
              <div class="item"> <img src="<?php echo STATICPATH ?>images/main/popup/prod-thumb-3.jpg" alt=""> </div>
              <div class="item"> <img src="<?php echo STATICPATH ?>images/main/popup/prod-thumb-4.jpg" alt=""> </div>
            </div>
            <!-- / Main Slider Ends -->
          </div>
          <!-- Single Products Slider Ends -->

          <!-- Products Description Starts -->
          <div class="col-md-6">
            <div class="product-content content-style-2">
              <div class="product-heading">
                <h2 class="title">white beard t-shirt</h2>
              </div>
              <div class="rating">
                <span class="star active"></span>
                <span class="star active"></span>
                <span class="star active"></span>
                <span class="star active"></span>
                <span class="star half"></span>
                <div class="product-review">
                  <ul class="list-items">
                    <li>04 Review(s) </li>
                    <li> <a href="#"> Add Your Review </a> </li>
                  </ul>
                </div>
              </div>

              <div class="product-price">
                <p class="caption-text">
                  <span class="size-30"> $45.05 </span>
                  <del>  </del>
                </p>
              </div>

              <div class="tabs-wrap">
                <div class="tab">
                  <ul class="nav prod-tabs">
                    <li class="active"><a href="#prod-prev-1" data-toggle="tab"> size guide </a></li>
                    <li class=""><a href="#prod-prev-2" data-toggle="tab"> shipping </a></li>
                    <li class=""><a href="#prod-prev-3" data-toggle="tab"> return </a></li>
                  </ul>
                </div>
                <div class="tab-content prod-tab-content">
                  <div id="prod-prev-1" class="tab-pane fade in active">
                    <ul>
                      <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>
                    </ul>
                    <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                  </div>
                  <div id="prod-prev-2" class="tab-pane fade">
                    <ul>
                      <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>
                    </ul>
                    <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                  </div>
                  <div id="prod-prev-3" class="tab-pane fade">
                    <ul>
                      <li> <i class="icon_stop"></i> <span class="des"> Modeled in size S. </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Shoulder seam to hem measures approx 58" / 147 cm in length </span> </li>
                      <li> <i class="icon_stop"></i> <span class="des"> Model Measurements: Height 5'9" / 175 cm, Waist 26" / 66 cm, Bust 32" / 81 cm, Hips 34.5" / 88 cm </span> </li>
                    </ul>
                    <p>This is a demo shop, the actual product is available for order on Amazon.com.</p>
                  </div>
                </div>

              </div>

              <hr class="fullwidth-divider">

              <div class="product-size">
                <form class="product-form">
                  <div class="form-group selectpicker-wrapper">
                    <label> <span> Color </span> <span class="red-color"> * </span> <span class="required red-color pull-right"> Field Required *</span> </label>
                    <div class="search-selectpicker selectpicker-wrapper">
                      <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Choose a color that you like.... ">
                        <option>Pink</option>
                        <option>Blue</option>
                        <option>Marooon</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group selectpicker-wrapper">
                    <label> <span> Size </span> <span class="red-color"> * </span> </label>
                    <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip" title="Choose a color that you like.... ">
                      <option>Pink</option>
                      <option>Blue</option>
                      <option>Marooon</option>
                    </select>
                  </div>
                </form>
              </div>

              <div class="prod-btns">
                <div class="quantity">
                  <button class="btn minus"><i class="icon_minus-06"></i></button>
                  <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                  <button class="btn plus"><i class="icon_plus"></i></button>
                </div>
                <div class="add-to-cart">
                  <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty"></i> Add to Cart </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Products Description Ends -->
        </div>
      </div>
    </section>
    <!-- / Product Preview Popup -->

    <?php
    $this->view->include('footer_2');
    ?>

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo STATICPATH ?>lib/jquery-ui.min.js"></script>

    <!-- JS Global -->
    <script src="<?php echo STATICPATH ?>plugins/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo STATICPATH ?>plugins/js/bootstrap.min.js"></script>
    <script src="<?php echo STATICPATH ?>plugins/js/bootstrap-select.min.js"></script>
    <script src="<?php echo STATICPATH ?>plugins/js/owl.carousel.min.js"></script>

    <script src="<?php echo STATICPATH ?>plugins/js/jquery.sticky.js"></script>
    <script src="<?php echo STATICPATH ?>plugins/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo STATICPATH ?>plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>


    <!--  Cusrom JS -->
    <script src="<?php echo STATICPATH ?>js/theme-main.js"></script>

    <script>
        var vm_video = "141274767";
    </script>
      <!-- Bootstrap -->
      <script src="<?php echo STATICPATH ?>lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- Lightbox -->
      <script src="<?php echo STATICPATH ?>lib/lightbox2-master/dist/js/lightbox.min.js"></script>
      <!-- Typing Effect -->
      <script src="<?php echo STATICPATH ?>lib/typed.js-master/dist/typed.min.js"></script>
      <!-- Dragging Scroll to Listing Gallery -->
      <script src="<?php echo STATICPATH ?>lib/jquery.dragscroll.js"></script>
      <!-- Horizontal Mousewheel Scroll to Listing Gallery -->
      <script src="<?php echo STATICPATH ?>lib/jquery-mousewheel-master/jquery.mousewheel.min.js"></script>
      <!-- Listing Filter -->
      <script src="<?php echo STATICPATH ?>lib/bootstrap-select-master/js/bootstrap-select.js"></script>
      <!-- To Self Hosted Hero Video -->
      <script src="<?php echo STATICPATH ?>lib/bideo.js-master/bideo.js"></script>
      <!-- Map -->
      <script src="<?php echo STATICPATH ?>lib/Leaflet-1.0.2/build/deps.js"></script>
      <script src="<?php echo STATICPATH ?>lib/Leaflet-1.0.2/debug/leaflet-include.js"></script>
      <script src="<?php echo STATICPATH ?>js/map-markers-samples/sampleMapSingleListingMarker.js"></script>
      <script src="<?php echo STATICPATH ?>js/main.js"></script>
      </body>
  </html>
