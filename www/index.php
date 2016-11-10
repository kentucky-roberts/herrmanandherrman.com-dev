<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Herrman and Herrman</title>

    <link href="css/styles.css" rel="stylesheet">
    <style>
@charset "UTF-8";
/* CSS Document */


@keyframes afc {
  from {
    opacity:0;
    transform:scale(0.2)
  }
  to {
    opacity:1;
    transform:scale(1)
  }
}
@-webkit-keyframes afc {
  from {
    opacity:0;
    -webkit-transform:scale(0.2)
  }
  to {
    opacity:1;
    -webkit-transform:scale(1)
  }
}
.animate_afc {
  opacity:0
}
.animate_afc.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afc;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afc;
  opacity:1
}
@keyframes afl {
  from {
    opacity:0;
    transform:translateX(-100px)
  }
  to {
    opacity:1;
    transform:translateX(0)
  }
}
@-webkit-keyframes afl {
  from {
    opacity:0;
    -webkit-transform:translateX(-100px)
  }
  to {
    opacity:1;
    -webkit-transform:translateX(0)
  }
}
.animate_afl {
  opacity:0
}
.animate_afl.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afl;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afl;
  opacity:1
}
@keyframes afr {
  from {
    opacity:0;
    transform:translateX(100px)
  }
  to {
    opacity:1;
    transform:translateX(0)
  }
}
@-webkit-keyframes afr {
  from {
    opacity:0;
    -webkit-transform:translateX(100px)
  }
  to {
    opacity:1;
    -webkit-transform:translateX(0)
  }
}
.animate_afr {
  opacity:0
}
.animate_afr.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afr;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afr;
  opacity:1
}
@keyframes aft {
  from {
    opacity:0;
    transform:translateY(-100px)
  }
  to {
    opacity:1;
    transform:translateY(0)
  }
}
@-webkit-keyframes aft {
  from {
    opacity:0;
    -webkit-transform:translateY(-100px)
  }
  to {
    opacity:1;
    -webkit-transform:translateY(0)
  }
}
.animate_aft {
  opacity:0
}
.animate_aft.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 aft;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 aft;
  opacity:1
}
@keyframes afb {
  from {
    opacity:0;
    transform:translateY(100px)
  }
  to {
    opacity:1;
    transform:translateY(0)
  }
}
@-webkit-keyframes afb {
  from {
    opacity:0;
    -webkit-transform:translateY(100px)
  }
  to {
    opacity:1;
    -webkit-transform:translateY(0)
  }
}
.animate_afb {
  opacity:0
}
.animate_afb.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afb;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 afb;
  opacity:1
}
@keyframes wfc {
  from {
    opacity:0;
    transform:scaleX(0.01)
  }
  to {
    opacity:1;
    transform:scaleX(1)
  }
}
@-webkit-keyframes wfc {
  from {
    opacity:0;
    -webkit-transform:scaleX(0.01)
  }
  to {
    opacity:1;
    -webkit-transform:scaleX(1)
  }
}
.animate_wfc {
  opacity:0
}
.animate_wfc.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 wfc;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 wfc;
  opacity:1
}
@keyframes hfc {
  from {
    opacity:0;
    transform:scaleY(0.01)
  }
  to {
    opacity:1;
    transform:scaleY(1)
  }
}
@-webkit-keyframes hfc {
  from {
    opacity:0;
    -webkit-transform:scaleY(0.01)
  }
  to {
    opacity:1;
    -webkit-transform:scaleY(1)
  }
}
.animate_hfc {
  opacity:0
}
.animate_hfc.animate_start {
  -webkit-animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 hfc;
  animation:0.8s cubic-bezier(1,0,0,1) 0s normal backwards 1 hfc;
  opacity:1
}
@keyframes rfc {
  from {
    opacity:0;
    transform:scale(0.01) rotate(360deg)
  }
  to {
    opacity:1;
    transform:scale(1) rotate(0)
  }
}
@-webkit-keyframes rfc {
  from {
    opacity:0;
    -webkit-transform:scale(0.01) rotate(360deg)
  }
  to {
    opacity:1;
    -webkit-transform:scale(1) rotate(0)
  }
}
.animate_rfc {
  opacity:0
}
.animate_rfc.animate_start {
  -webkit-animation:0.8s ease 0s normal backwards 1 rfc;
  animation:0.8s ease 0s normal backwards 1 rfc;
  opacity:1
}
@keyframes rfl {
  from {
    opacity:0;
    transform:translateX(-100px) rotate(-180deg)
  }
  to {
    opacity:1;
    transform:translateX(0) rotate(0)
  }
}
@-webkit-keyframes rfl {
  from {
    opacity:0;
    -webkit-transform:translateX(-100px) rotate(-180deg)
  }
  to {
    opacity:1;
    -webkit-transform:translateX(0) rotate(0)
  }
}
.animate_rfl {
  opacity:0
}
.animate_rfl.animate_start {
  -webkit-animation:0.8s ease 0s normal backwards 1 rfl;
  animation:0.8s ease 0s normal backwards 1 rfl;
  opacity:1
}
@keyframes rfr {
  from {
    opacity:0;
    transform:translateX(100px) rotate(180deg)
  }
  to {
    opacity:1;
    transform:translateX(0) rotate(0)
  }
}
@-webkit-keyframes rfr {
  from {
    opacity:0;
    -webkit-transform:translateX(100px) rotate(180deg)
  }
  to {
    opacity:1;
    -webkit-transform:translateX(0) rotate(0)
  }
}
.animate_rfr {
  opacity:0
}
.animate_rfr.animate_start {
  -webkit-animation:0.8s ease 0s normal backwards 1 rfr;
  animation:0.8s ease 0s normal backwards 1 rfr;
  opacity:1
}
.d1.animate_start {
  -webkit-animation-delay:0.2s;
  animation-delay:0.2s
}
.d2.animate_start {
  -webkit-animation-delay:0.4s;
  animation-delay:0.4s
}
.d3.animate_start {
  -webkit-animation-delay:0.6s;
  animation-delay:0.6s
}
.d4.animate_start {
  -webkit-animation-delay:0.8s;
  animation-delay:0.8s
}
.d5.animate_start {
  -webkit-animation-delay:1s;
  animation-delay: 1s
}

.d6.animate_start {
  -webkit-animation-delay:1.2s;
  animation-delay: 1.2s
}
/* Slogan Area */
.slogan {
    min-height: 100px;
    background: #fafafa;
    width: 100%;
    border-top: 1px solid #DDD;
    border-bottom: 1px solid #DDD;
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
}

.slogan-content {
    padding: 25px 0;
}

.slogan-title {
    display: inline-block;
    margin: 10px 0;
}

.page-services .slogan-content {
    padding: 40px 0;
}

.page-services .get-started  {
  padding-top: 15px;
}

.get-started {
    padding-top: 1px;
  vertical-align:middle;
}


/* Main Content Boxes */
.main-content,.content {
    padding: 60px 0 0;
}

.home-2 .main-content, .home-3 .main-content {
  margin: 45px 0 40px;
  padding:0;
}

.main-content {
  margin: 45px 0 35px;
}

div.content-box {
    clear: both;
}

div.content-box div.content-box-info {
    padding-left: 115px;
}

div.content-box.big {
  padding:0 7% 30px;
  border-radius: 3px;
  background:#fff;
  -webkit-transition: background .5s ease-in-out;
    -moz-transition: background .5s ease-in-out;
    -o-transition: background .5s ease-in-out;
    -ms-transition: background .5s ease-in-out;
    transition: background .5s ease-in-out;
}


div.content-box.big .ch-info-wrap {
  margin: -42px auto 35px;
  position:relative;
  left:auto;
  top:auto;
}

div.content-box.big:hover {
  background: #fafafa;
}

div.content-box.big div.content-box-info {
    padding-left: 0;
  text-align:center;
  margin:25px 0 0;
}

div.content-box.big div.content-box-info p {
  text-align:center;
  margin-top: 25px;
}

.service-reasons div.content-box.big {
  transition:none;
  margin-top: 30px;
  border: 1px solid #fff;
}

.main-content h3 {
    color: #666;
    line-height: 32px;
    margin: 0 0 5px;
}

.main-content p,.content p {
    text-align: left;
}


/* Common Elements */
.divider {
    margin: 60px 0;
}

.blog-divider {
  margin:35px 0;
  background: url("http://donnasintay.com/images/uploads/bg/bg_off.png") repeat;
    content: "";
    height: 5px;
}

.top-pad {
    margin-top: 25px;
}

.no-divider {
    margin: 0;
}

.bottom-pad {
    margin-bottom: 60px;
}

.bottom-pad-small {
    margin-bottom: 30px;
}

.no-bottom-pad {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <img alt="logo" src="img/logo/top-nav-logo.png" class="">
        </div>
        <div class="col-xs-3">
          <div>
            <ul class="list-inline">
              <li><button class="btn btn-default btn-sm btn-round text-upper">Live Chat</button></li>
              <li><button class="btn btn-default btn-sm btn-round text-upper">En Espanol</button></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="header-phone pull-right">361.792.2586</div><br>
          <a href="#" class="header-request pull-right"><em>Request a call back</em></a>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <header class="hidden">
    <div class="header-content">
      <div class="header-content-inner">
        <h1 id="homeHeading">Main Heading</h1>
        <hr>
        <p>Summary Text</p>
        <a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
      </div>
    </div>
    <video autoplay="" loop="" class="fillWidth fadeIn animated" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
      <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>
</header>

<ol class="breadcrumb">
  <div class="container breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Generic Page Styles</li>
  </div>
</ol>

  <div class="container">
    <div class="row">
      <h1>Generic Page Styles</h1>
      <section class="col-md-2 col-sm-12">
        <img src="img/generic/generic-photo.png" class="img-responsive">
      </section>
      <section class="col-md-7 col-sm-12">
        <p>
          Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla dolor eget facilisis.
        </p>
        <p>
          Lorem id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum <a href="#">runtrum este legestas</a> orem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur.  Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna <a href="#">suspendisse dictum feugiat nisl ut dapibus</a> ut dui. Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque id mollis quam morbi ac commodo egestas.
        </p>
      </section>
      <section class="col-md-3 col-sm-12">
        <aside>
          <div class="sidebar">
            <div class="sidebar-item">
              <div class="cta-01-container">
                
                  <h3><i class="icon ion-model-s" style="font-size: 50px;"></i> Types of Vehicle<br>Accident Damages</h3>
                  <p>
                    There are several types of damages, both past and future, that are awarded in a car accident injury case. You can expect to recover compensation for the following:
                  </p>
                  <ul class="list-using-solid-squares">
                    <li>Medical Costs</li>
                    <li>Lost Wages</li>
                    <li>Rehabilitation Costs</li>
                    <li>Pain and Suffering</li>
                    <li>Loss of Quality of Life</li>
                    <li>Property Damage</li>
                  </ul>
           
              </div>
            </div>
          </div>
        </aside>
      </section>
    </div>

    <div class="row">
      <section class="col-xs-12">
        <h2>h2 Header</h2>
        <p>
          Maecenas quis tempus massa, viverra porttitor leo. Integer estem consectetur quam enim, quis efficitur libero blandit vel. Pellentesque eget lorem sapien ac turpis consequat consectetur. Vivamus varius quis est at finibus. Mauris dictum aliquet libero ut tempor. Curabitur mollis tortor nec mi auctor, eu molestie metus egestas. Suspendisse dapibus ullamcorper nulla et rhoncus. Donec luctus ligula non metus dignissim, vel malesuada elit varius. Integer sollicitudin velit dictum dolor dapibus varius. Nullam pulvinar venenatis suscipit duis tinsim.
        </p>
      </section>
    </div>
   
    <div class="row">
      <section class="col-xs-12">
        <button class="btn btn-cta-green btn-lg"><span>Tell Us About Your Case</span><i class="icon ion-log-in"></i></button>
      </section>
    </div>
  
    <div class="row">
      <section class="col-xs-12">
        <h3>H3 Header</h3>
        <p>
          Ut ornare leo eu ipsum tincidunt consequat. Morbi ac diam tortor. Sed tristique lacinia odio, eu faucibus lorem dolor ipsum estem. Curabitur mollis tortor nec mi auctor, eu molestie metus egestas. Suspendisse dapibus ullamcorper.
        </p>
      </section>
    </div>

  </div>


  
    <div class="container">
      <div class="row">
        <h3>Accordian Styles</h3>
        <section class="col-xs-6">

          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Quisque lacus quam egestas ac tincidunt a lacinia vel delita?
          </button>
          <div class="collapse" id="collapseExample">
            <div class="well">
              Answer One
            </div>
          </div>

          <br>

          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#answer-02" aria-expanded="false" aria-controls="answer-02">
            Question two a lacinia vel delita?
          </button>
          <div class="collapse" id="answer-02">
            <div class="well">
              Aanswer two 
            </div>
          </div>

        </section>
      </div>
    </div>

    <div class="grad-green-linear">
      <div class="promo-container">
        <div class="container">
        <h5 class="text-center">Texas Car Accidents Statistics</h5>
          <div class="row">
            <section class="col-xs-12">
              <p>
                There are no “deathless days” on the Texas roadways. In fact, statistics from 2013 reveal that one person was killed in a vehicle accident every two hours and 36 minutes in the state, with one person injured every two minutes and 16 seconds. That year, 232,041 people were injured, and 89,270 people sustained a serious injury. In Corpus Christi there were 20 fatal accidents, 907 serious injury crashes, 2,133 other injury accidents, and a total of 6,865 car accidents in that year.
              </p>
            </section>
          </div>
          <div class="row-of-stats" style="width:100%">
            <div class="row">
              <section class="col-md-4 col-sm-12">
                <span class="strong-number"><em>3,399</em></span><span class="text-light-green"><small>Fatal Crashes</small></span>
              </section>
              <section class="col-md-4 col-sm-12">
                <span class="strong-number"><em>87,087</em></span><span class="text-light-green"><small>Serious Injuries</small></span>
              </section>
              <section class="col-md-4 col-sm-12">
                <span class="strong-number"><em>10%</em></span><span class="text-light-green"><small>Increase In Fatalities</small></span>
              </section>
            </div>
          </div>
          <div class="row">
            <section class="col-xs-12">
              <p>
                In 2011, there were 63,610 serious injury crashes in Texas and in 2012 the number jumped to a startling 87,087.  Contributing factors for car accidents vary, but by far negligence is the leading cause of car accidents. At Herrman & Herrman, P.L.L.C. we help our clients get back on the road to recovery after they have become the victim of a negligent driver.
              </p>
            </section>
          </div>

          <!-- these stats are used in another green promo container TODO... croberts -> create new green promo thing and use hidden stats below -->
          <div class="hidden row row-of-stats">
            <section class="col-md-4 col-xs-12">
              <span class="strong-number">20</span><span class="text-light-green">Sereous Injuries</span>
            </section>
            <section class="col-md-4 col-xs-12">
              <span class="strong-number">907</span><span class="text-light-green">Other Injuries</span>
            </section>
            <section class="col-md-4 col-xs-12">
              <span class="strong-number">6,865</span><span class="text-light-green">Car Accidents</span>
            </section>
          </div>

        </div>
      </div>
    </div>


    <div class="slogan">
       <div class="container">
          <div class="row">
             <div class="slogan-content">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                   <h4 class="slogan-title">Contact us 24/7. Call or click now! <a href="#"><strong>361.792.258</strong></a> or <a href="#">Request a Call Back</a></h4>
                </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
                <div class="get-started">
                      <button class="btn btn-warning text-upper pull-right" style="color: #070f17;"><span>Start Your Case Now </span><i class="icon ion-log-in"></i></button>
                </div><!-- get started -->
              </div><!-- col-md-3 -->
              <div class="clearfix"></div>
             </div>
          </div>
       </div>
    </div>

    <div class="pre-footer-nav">
      <div class="container">
        <div class="row">
          <section class="col-md-10">
             <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Firm</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Privicy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
          </section>
          <section class="col-md-2">
            <ul class="list-inline pull-right">
              <li><a href="#"><i class="icon ion-social-chrome-outline"></i></a></li>
              <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
              <li><a href="#"><i class="icon ion-social-youtube-outline"></i></a></li>
            </ul>
          </section>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <section class="col-md-6">
            <p>
              © 2016 Herrman & Herrman - All Rights Reserved
            </p>
          </section>
          <section class="col-md-6">
            <p>
              Site by Consultwebs.com: Law Firm Website Designers / Personal Injury Lawyer Marketing
            </p>
          </section>
        </div>
      </div>
    </footer>





    <div class="row">

          <div class="col-md-3">

            <a class="white-btn text-uppercase" href="#">Live Chat</a>

            <a class="white-btn text-uppercase" href="/espanol/">En Español</a>

          </div>

          <div class="col-md-2 callback">

            <a href="3617922586">361.792.2586</a>

            <a class="green-link">Request a call back</a>

          </div>

        </div>

      </div>

      <nav class="footer-nav">

        <div class="container">

          <div class="row">

            <div class="col-md-9">

          <!--     <?php wp_nav_menu( array( 'theme_location'  => 'footer-menu', 'walker' => new Walker_Nav_Primary() ) ) ?>
 -->
            </div>

            <ul class="social-media col-md-3">

              <li><a href="#" target="_blank"><i class="google-plus"></i></a></li>

              <li><a href="#" target="_blank"><i class="twitter"></i></a></li>

              <li><a href="#" target="_blank"><i class="facebook"></i></a></li>

              <li><a href="#" target="_blank"><i class="youtube"></i></a></li>

            </ul>

          </div>

        </div>

      </nav>

      <div class="bottom-footer">

        <div class="container">

          <div class="row">

            <div class="col-sm-3">

              <p class="copyright">&copy; <?php the_date('Y') ?> Herman &amp; Herman  - All Rights Reserved</p>

            </div>

            <div class="col-sm-5 pull-right no-pad-left">

              <a class="built_by" href="https://www.consultwebs.com/" target="_blank" rel="nofollow"><i class="sprite icon-consultwebs-logo"></i> Site by Consultwebs.com: Law Firm Website Designers / Personal Injury Lawyer Marketing</a>

            </div>

          </div>

        </div>

      </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="lib/bootstrap/javascripts/bootstrap-sprockets.js"></script>
    <script src="lib/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

