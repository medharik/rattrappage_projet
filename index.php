<?php
include("modele.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>E- ecommerce</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <?php include "_header.php"; ?>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase"> Collection Homme </p>
            <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
            <h4>Fowl saw dry which a above together place.</h4>
            <a class="main_btn mt-40" href="#">View Collection</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->

  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Derniere collection</span></h2>
            <p>Notre nouvelle collection été 2020 </p>
          </div>
        </div>
      </div>

      <div class="row">
        <?php
        $last = findBy("place = 'last' ", 'produit');

        foreach ($last as $l) { ?>

          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= $l['photo'] ?>" alt="" />
                <div class="p_icon">
                  <a href="single-product.php?id=<?= $l['id'] ?>">
                    <i class="ti-eye"></i>
                  </a>

                  <a href="ajout_panier.php?id=<?= $l['id'] ?>">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $l['libelle']; ?></h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">$<?= $l['prix'] * (1 - $l['reduction'] / 100) ?></span>
                  <del>$<?= $l['prix']; ?></del>
                  <p>Reduction de <?= $l['reduction'] ?>%</p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
      <h4 class="text-center">En promotion</h4>
      <div class="row">
        <?php
        $last = findBy("place = 'promo' ", 'produit');

        foreach ($last as $l) { ?>

          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= $l['photo'] ?>" alt="" />
                <div class="p_icon">
                  <a href="single-product.php?id=<?= $l['id'] ?>">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="ajout_panier.php?id=<?= $l['id'] ?>">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $l['libelle']; ?></h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">$<?= $l['prix'] * (1 - $l['reduction'] / 100) ?></span>
                  <del>$<?= $l['prix']; ?></del>
                  <p>Reduction de <?= $l['reduction'] ?>%</p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
      <div class="row">
        <?php
        $last = findBy("place = 'last' ", 'produit');

        foreach ($last as $l) { ?>

          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= $l['photo'] ?>" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="ajout_panier.php?id=<?= $l['id'] ?>">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $l['libelle']; ?></h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">$<?= $l['prix'] * (1 - $l['reduction'] / 100) ?></span>
                  <del>$<?= $l['prix']; ?></del>
                  <p>Reduction de <?= $l['reduction'] ?>%</p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->

  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>En promo</span></h2>
          </div>
        </div>
      </div>

      <div class="row">
        <?php
        $promo = findBy("place = 'promo' ", 'produit');

        foreach ($promo as $l) { ?>

          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= $l['photo'] ?>" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="ajout_panier.php?id=<?= $l['id'] ?>">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $l['libelle']; ?></h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">$<?= $l['prix'] * (1 - $l['reduction'] / 100) ?></span>
                  <del>$<?= $l['prix']; ?></del>
                  <p>Reduction de <?= $l['reduction'] ?>%</p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>


  <!-- ================ Offer Area =================
  <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">all men’s collection</h3>
            <h2 class="text-uppercase">50% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Limited Time Offer</p>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">collection of 2019</h5>
            <h3 class="text-uppercase">Men’s summer t-shirt</h3>
            <div class="product-img">
              <img class="img-fluid" src="img/product/new-product/new-product1.png" alt="" />
            </div>
            <h4>$120.70</h4>
            <a href="#" class="main_btn">Add to cart</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n1.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Nike latest sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n2.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>Men’s denim jeans</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n3.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>quartz hand watch</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n4.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>adidas sport shoe</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">$25.00</span>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span> produits inspires</span></h2>

          </div>
        </div>
      </div>

      <div class="row">





        <!-- debut prooduit inspire -->
        <?php
        // $produit=  find(2,"produit");
        $produits = findBy("place='inspire'", "produit");
        //  $pa= $produits[0];
        //  echo $pa['libelle'];
        foreach ($produits as $p) {
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="<?= $p['photo'] ?>" alt="" />
                <div class="p_icon">

                  <a href="ajout_panier.php?id=<?= $p['id'] ?>">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4><?= $p['libelle'] ?></h4>
                </a>
                <div class="mt-3">

                  <del><?= $p['prix'] ?>MAD</del>
                  <?php if ($p['reduction'] != 0) { ?>

                    <span class="mr-4"><?php
                                        $prix_reduit = $p['prix'] - $p['prix'] * $p['reduction'] / 100;
                                        echo $prix_reduit;

                                        ?>MAD</span>
                    <p style="color:green">
                      Reduction de : <?= $p['reduction'] ?>%
                    </p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- fib prooduit inspire -->
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->

  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>latest blog</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b1.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b2.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b3.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

  <!--================ start footer Area  =================-->
  <?php include("_footer.php"); ?>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>