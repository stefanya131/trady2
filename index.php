<?php include("layouts/header.php"); ?>
   <link href="busqueda/search.php" rel="text/html">
    <div class="body-wrapper">
      <div class="container-fluid hero-header h-video transparent">
        <!-- Start Header Centralizer -->
        <div class="header-centralizer">
          <div class="content-centralized">
            <!-- Start Hero Search -->
            <div class="hero-search">
              <form>
                <fieldset>
                  <input type="text" class="form-control" data-placeholder="Explore and Enjoy...">
                  <span class="typingEffect" data-title="Explore and Enjoy//Find New Places//Discover Tasty Goodies//Do Memorable Check-ins//Go Beyond Horizon"></span>
                </fieldset>
                <!-- Start Search cities Toggle -->
                <div class="search-cities-toggle"></div>
                <!-- End Search cities Toggle -->
                <!-- Start Search Cities -->
                <div class="search-cities">
                  <div class="cities-list">
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/1.jpg')" data-city-id="1"><span>Boston</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/2.jpg')" data-city-id="2"><span>Chicago</span></a>
                 
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/4.jpg')" data-city-id="3"><span>New Orleans</span></a>
                    <a href="#" style="background-image:url('assets/images/cities/thumbs/5.jpg')" data-city-id="4" class="go-more-cities"><span>More Cities</span></a>
                    <input class="chosen-city" type="hidden" name="city" value="0">
                  </div>
                </div>
                <!-- End Search Cities -->
                <div class="search-submit">
                  <input type="button" value=" ">
                  <a href="busqueda/search.php" class="hero-search-icon"></a>
                </div>
              </form>
            </div>
            <!-- End Hero Search -->
            <!-- Start Search Categories -->
            <div class="search-categories">
              <div class="categories">
                <a class="icon-platter child" href="#">Restaurant</a>
                <a class="icon-teacup child" href="#">Café</a>
                <a class="icon-moon" href="#">Nightlife</a>
                <a class="icon-landscape" href="#">Outdoor</a>
                <a class="icon-home" href="#">Lodging</a>
                <a class="icon-car child" href="#">Car Dealer</a>
                <a class="icon-hanger child" href="#">Clothing</a>
                <a class="icon-bench-press child" href="#">Gim</a>
                <a class="icon-saw child" href="#">Home Service</a>
                <a class="icon-laundry child" href="#">Laundry</a>
                <a class="icon-bag-dollar child" href="#">Bank</a>
                <a class="icon-palette child" href="#">Art Gallery</a>
                <a class="icon-library child" href="#">Bookstore</a>
                <a class="icon-chair child" href="#">Furniture</a>
                <a class="icon-receipt" href="#">Coupons</a>
                <a class="icon-lan2" href="#">Online Order</a>
                <a class="icon-paw" href="#">Pets Friendly</a>
                <a class="icon-wheelchair" href="#">Accessible</a>
                <a class="icon-wifi" href="#">Wi-Fi</a>
                <a class="icon-city" href="#">More Options</a>
              </div>
            </div>
            <!-- End Search Categories -->
          </div>
        </div>
      </div>
      <!-- Ends Hero Header -->
      <!-- Start Front Categories -->
      <div class="container-fluid front-categories vertical">
        <div class="row row-title">
          <h1>What Do You Need Today?</h1>
          <h4>Easily glimpse hand picked places</h4>
        </div>
        <div class="row cat-itens">
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/1.jpg')"></div>
            <div class="cat-icon icon-bus"></div>
            <div class="cat-counter">34</div>
            <a href="#">
              <div class="cat-text">Tour</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div class="cat-image" style="background-image:url('assets/images/categories/2.jpg')"></div>
            <div class="cat-icon icon-dinner"></div>
            <div class="cat-counter">7</div>
            <a href="#">
              <div class="cat-text">Eat</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/3.jpg')"></div>
            <div class="cat-icon icon-bed"></div>
            <div class="cat-counter">47</div>
            <a href="#">
              <div class="cat-text">Relax</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/6.jpg')"></div>
            <div class="cat-icon icon-bag"></div>
            <div class="cat-counter">29</div>
            <a href="#">
              <div class="cat-text">Buy</div>
            </a>
          </div>
          <div class="cat-item">
            <div class="cat-overlay"></div>
            <div  class="cat-image" style="background-image:url('assets/images/categories/10.jpg')"></div>
            <div class="cat-icon icon-city"></div>
            <div class="cat-counter">92</div>
            <a href="#">
              <div class="cat-text">Other</div>
            </a>
          </div>
        </div>
      </div>
      <!-- End Front Categories -->
      <!-- Start Trending -->
      <div class="container-fluid trending">
        <div class="row row-title">
          <h1>Trending Right Now</h1>
          <h4>The most quoted recently</h4>
        </div>
        <div class="row listing">
          <!-- Start Trending Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-teacup"></a>
              <div class="listing-item-rating">4.2</div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Sightglass Coffee
                    <div class="ribbon">~ $20-$50</div>
                  </div>
                </div>
                <img alt="" src="assets/images/trending/2.jpg" />
              </a>
              <div class="listing-item-data">
                <a class="listing-item-address" href="#">
                  3014 20th St San Francisco
                </a>
                <div class="listing-item-excerpt">
                  The love of coffee shines all the woody ambience
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Cafeteria</a>
              </div>
            </div>
          </div>
          <!-- End Trending Item Col -->
          <!-- Start Trending Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-library2"></a>
              <div class="listing-item-rating">4.9</div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    N.O.M.A.
                    <div class="ribbon">Admission $12</div>
                  </div>
                </div>
                <img alt="" src="assets/images/trending/3.jpg" />
              </a>
              <div class="listing-item-data">
                <a class="listing-item-address" href="#">
                  City Park, New Orleans, Louisiana 70124
                </a>
                <div class="listing-item-excerpt">
                  The New Orleans Museum of Art
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Museum</a>
              </div>
            </div>
          </div>
          <!-- End Trending Item Col -->
          <!-- Start Trending Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-lotus"></a>
              <div class="listing-item-rating">4.7</div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Mead Botanical Garden
                    <div class="ribbon">Free Entrance</div>
                  </div>
                </div>
                <img alt="" src="assets/images/trending/1.jpg" />
              </a>
              <div class="listing-item-data">
                <a class="listing-item-address" href="#">
                  1500 S. Denning Drive Winter Park, FL 32789
                </a>
                <div class="listing-item-excerpt">
                  48-acre urban oasis located on Orange County
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Park and Garden</a>
              </div>
            </div>
          </div>
          <!-- End Trending Item Col -->
          <!-- Start Trending Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-glass"></a>
              <div class="listing-item-rating">3.9</div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Cave B Estate
                    <div class="ribbon">Starting from $49</div>
                  </div>
                </div>
                <img alt="" src="assets/images/trending/4.jpg" />
              </a>
              <div class="listing-item-data">
                <a class="listing-item-address" href="#">
                  348 Silica Rd NW Quincy, WA 98848
                </a>
                <div class="listing-item-excerpt">
                  Fine Wines, Crafted with Artistry and Passion
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Winery</a>
              </div>
            </div>
          </div>
          <!-- End Trending Item Col -->
        </div>
      </div>
      <!-- End Trending -->
      <!-- Start How It Works -->
      <div class="container-fluid how color-bg">
        <div class="row row-title">
          <h1>How it Works</h1>
          <h4>New experiences and opportunities to both sides</h4>
        </div>
        <div class="row how-items">
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-1.png" />
                <h3 class="how-item-title">Announcers</h3>
                <div class="how-item-excerpt">
                  Publish a listing to show everyone what are the goodies of your establishment. Add amenities and tags to promote every detail of your listing.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-2.png" />
                <h3 class="how-item-title">Consumers</h3>
                <div class="how-item-excerpt">
                  Easily find interesting hand-picked places by local experts. Save your time by organizing your trip Online, don't miss any point.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-3.png" />
                <h3 class="how-item-title">Everyone</h3>
                <div class="how-item-excerpt">
                  Exchange experiences and tastes, extend your personal and profissional network creating long-term business relationship and new friendships.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
          <!-- Start How Item Col -->
          <div class="col-sm-3">
            <div class="how-item">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/icon-4.png" />
                <h3 class="how-item-title">Free Vs Premium</h3>
                <div class="how-item-excerpt">
                  You can start it free right now and migrate to a premium account anytime you want. Click to see all the plans and resources.
                </div>
              </a>
            </div>
          </div>
          <!-- End How Item Col -->
        </div>
      </div>
      <!-- End How It Works -->
      <!-- Start App -->
      <div class="container-fluid app">
        <div class="row row-title">
          <h1>Download our App</h1>
          <h4>All listings at your fingertips</h4>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="app-version">
              v1.03 (beta)
            </div>
            <div class="app-img">
              <img alt="" src="assets/images/miscellaneous/mobile-cut-laguna-green.png"/>
            </div>
            <div class="app-links">
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/g-play.png" />
              </a>
              <a href="#">
                <img alt="" src="assets/images/miscellaneous/app-st.png" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End App -->
      <!-- Start Blog Section -->
      <div class="container-fluid blog blog-home">
        <div class="row row-title">
          <h1>Tips and Tricks</h1>
          <h4>We have some suggestions to you</h4>
        </div>
        <div class="row listing white">
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-news"></a>
              <div class="listing-item-date">
                <div class="day">12</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    From Beach Glitz to Urban Ritz, Miami's Hotels Shine
                  </div>
                </div>
                <img alt="" src="assets/images/blog/14.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  The best relaxing experience
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Relax</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-paperclip"></a>
              <div class="listing-item-date">
                <div class="day">07</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Fill Your Bags with Buys from Boston's Best Shopping Spots
                  </div>
                </div>
                <img alt="" src="assets/images/blog/15.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Staple items, unique pieces
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Shop</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-reminder"></a>
              <div class="listing-item-date">
                <div class="day">02</div>
                <div class="month">Feb</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Fall In Love All Over Again During These Romantic Activities in NYC
                  </div>
                </div>
                <img alt="" src="assets/images/blog/17.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Take romance to the next level
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Fun and Entertainment</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
          <!-- Start Blog Item Col -->
          <div class="col-sm-3">
            <div class="listing-item">
              <a href="#" class="category-icon icon-lamp"></a>
              <div class="listing-item-date">
                <div class="day">23</div>
                <div class="month">Jan</div>
              </div>
              <a href="#" class="listing-item-link">
                <div class="listing-item-title-centralizer">
                  <div class="listing-item-title">
                    Get Your Sourdough On at Goat Hill Pizza
                  </div>
                </div>
                <img alt="" src="assets/images/blog/16.jpg" />
              </a>
              <div class="listing-item-data">
                <div class="listing-item-excerpt">
                  Spreading the joy to West Portal
                </div>
              </div>
              <div class="listing-category-name">
                <a href="#">Food and Drink</a>
              </div>
            </div>
          </div>
          <!-- End Blog Item Col -->
        </div>
      </div>
      <!-- End Blog Section -->
      <!-- Start Footer -->
      <?php include("layouts/footer.php"); ?>
      <!-- End Footer -->
    </div>    