<title>Performance Heating and Cooling</title>
<meta name="description"
  content="We service, repair, sell and install Residential and Commercial Heating and Cooling Systems throughout Licking, North Fairfield, and Franklin Counties of Ohio.">
<?php include('header.php'); ?>

<main>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7500">
    <!-- Indicators -->
    <!--
 <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>

  </ol>

  Wrapper for slides

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">      
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>  
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>  
  </ol>    -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo $base_url; ?>/img/Performance_New_Customer_Special_Banner_2022_1000x350.jpg"
          alt="first slide" width="100%">
      </div>


      <div class="item">
        <a href="request-service.php"> <img
            src="<?php echo $base_url; ?>/img/we_do_it.jpg"
            alt="second slide" width="100%"> </a>
      </div>



    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <!-- Controls -->

  </div>
  <style>
    @media screen and (min-width: 481px) {

      .carousel-indicators li {
        height: 7px !important;
        width: 72px !important;
        border-radius: 0 !important;
        ;
        background: #a00215;
        border: 0px !important;
        margin-right: 10px;
      }

      .carousel-indicators .active {
        border-radius: 0;
        background: #ffffff !important;
        margin-right: 10px;
        opacity: 1;
      }

    }

    .carousel-indicators .active {
      border-radius: 0;
      background: #ffffff !important;
      margin-right: 10px;
      opacity: 1;
    }
  </style>

  <script>

    $('.carousel-inner').carousel({

      interval: 16000;

    })

  </script>
  <script>
    $(document).ready(function () {
      $("#myCarousel").carousel({ interval: 16000, autoPlay: 16000, hover: null, pause: null);



      $(".item").click(function () {
        $("#myCarousel").carousel(1);
      });
      $(".item2").click(function () {
        $("#myCarousel").carousel(2);
      });
      $(".item3").click(function () {
        $("#myCarousel").carousel(3);
      });

      $(".item4").click(function () {
        $("#myCarousel").carousel(3);
      });

    });
  </script>


  <div class="container mb-lg mt-lg">
    <div class="row bubble-section">

      <div class="col-lg-2 col-sm-4">
        <div class="text-center blue-boxes">
          <a href="<?php echo $base_url ?>/air-conditioners.php">
            <div class="icon">
              <img src="https://www.schmidtheating.com/images/Asset 4.png" alt="" class="img-responsive">
            </div>
            <h4>Air<br>Conditioning</h4>
            <p> </p>
          </a>
        </div>
      </div>

      <div class="col-lg-2 col-sm-4">
        <div class="text-center blue-boxes">
          <a href="<?php echo $base_url ?>/heating.php">
            <div class="icon">
              <img src="https://www.schmidtheating.com/images/Asset 3.png" alt="" class="img-responsive">
            </div>
            <h4>Heating</h4>
            <p> </p>
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4">
        <div class="text-center blue-boxes">
          <a href="<?php echo $base_url ?>/heat-pumps.php">
            <div class="icon">
              <img src="<?php echo $base_url ?>/img/heat pump (1).png" alt=""
                class="img-responsive">
            </div>
            <h4>Heat <br> Pumps</h4>
            <p> </p>
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4">
        <div class="text-center blue-boxes">
          <a href="<?php echo $base_url ?>/mini-split.php">
            <div class="icon">
              <img src="https://www.schmidtheating.com/images/mini-split.png" alt="" class="img-responsive">
            </div>
            <h4>Mini <br> Splits</h4>
            <p> </p>
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-sm-4">
        <div class="text-center blue-boxes">
          <a href="<?php echo $base_url ?>/financing.php">
            <div class="icon" style="cursor: pointer;">
              <img src="https://www.schmidtheating.com/images/Asset 2.png" alt="" class="img-responsive">
            </div>
            <h4>Financing</h4>
            <p> </p>
          </a>
        </div>
      </div>



    </div>
  </div>

  <section class="full-row make-it-possible">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-3">
            <script src="//www.toyoursuccess.com/reviews/js:6187:4"></script>
          </div>
          <div class="col-sm-9">
            <h2>Why Wait? Get Total Comfort Today!</h2>
            <p>Honest Estimates. Affordable Prices. Experienced Technicians.</p> <br />
            <p style="width:100%"><a class="btn btn-warning" href="<?php echo $base_url ?>/contact-us.php">Contact Our
                experts</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="full-row homepage-video-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Your Comfort Is Our Business</h2>
          <p>Performance Heating and Cooling is the premier HVAC company in the Heath, Ohio area. Since 2005, we have been proudly serving the local community with our outstanding heating and air conditioning services. We are a family-owned and operated business that has built its reputation on high quality, value, and a worry-free customer experience. Our NATE-certified HVAC technicians are at the top of their field and continually receive training to improve their knowledge. From routine maintenance to emergency repairs to quality installation of high-efficiency home comfort systems, give us a call today!</p>

        </div>
        <div class="col-md-6 iframe-wrap">
          <img src="<?php echo $base_url ?>/img/performance heath oh (1).jpg" alt="" style="width:75%">
 
        </div>
      </div>
    </div>
  </section>



  <section class="full-row testmonial">

    <div class="container">

      <div class="col-sm-12 text-center">

        <h2>What Our Customers Are Saying</h2>

      </div>

      <div id="testmonial" class="owl-carousel">
        <!--slider list-->
        <div class="col-sm-12 item  owl-item">
          <p class="light text-center ">
          <p class="light text-center ">I have been using this company for my HVAC work for 1-2 years, have always been
            very responsive, excellent work, reasonable prices. Can’t put a price on trust in knowing it will be done
            right.</p>

          <h3 class="text-center">J. C Heath </h3>

        </div>

        <!--slider list-->
        <!--slider list-->

        <div class="col-sm-12 item  owl-item">

          <p class="light text-center ">
          <p class="light text-center ">Great experience! We had both our furnace and A/C replaced. Proposal included
            options, and suggestions were given as to what would work best for us. The installation only took one day.
          </p>

          <h3 class="text-center">J. L Millersport</h3>

        </div>

        <!--slider list-->
        <!--slider list-->

        <div class="col-sm-12 item  owl-item">

          <p class="light text-center ">
          <p class="light text-center ">Love our new furnace and AC!! The service we received before during and after
            has been fantastic!! The staff are so professional.</p>

          <h3 class="text-center">D.B Reynoldsburg</h3>

        </div>

        <!--slider list-->
        <!--slider list-->

        <div class="col-sm-12 item  owl-item">

          <p class="light text-center ">
          <p class="light text-center ">Performance responded quickly to our issues with both the heating and air
            conditioning issues. The staff is very polite and helpful. Will be using them again.</p>

          <h3 class="text-center">P.G Gahanna</h3>

        </div>

      </div>

      <div class="col-sm-12 text-center">

        <a href="testimonials.php" class="btn btn-default">Read More</a>

      </div>
    </div>
  </section>

  <!--    <section class="full-row countries text-center text-white">

        <div class="container">

            <h2>We proudly service communities in the following Indiana and Illinois counties -</h2>
            <h3>(Indiana) Vigo, Clay, Fountain, Greene, Montgomery, Owen, Parke, Putnam, Sullivan, and Vermillion *

                (Illinois) Clark, Crawford, and Edgar</h3>

        </div>
    </section>

    <section class="full-row call text-center text-white">

        <div class="container">

            <h2>Call (812) 232-2347 <span>to make an appointment or book online</span></h2>

        </div>
    </section> -->
</main>

<?php include('footer.php'); ?>