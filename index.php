<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cheese & Company</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/responsiveslides.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- // <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <!-- TODO: make navbar shrink on scroll? http://stackoverflow.com/questions/24765155/shrinking-navigation-bar-when-scrolling-down-bootstrap3 -->
    <?php include 'header.html'; ?>
<?php include_once("analyticstracking.php") ?>
    <br />
    <br />
    <div class="container">
      <ul class="rslides center-block">
        <li><img class="center-block" src="mobarista_assets/slideshow/0.png" alt=""></li>
        <li><img class="center-block" src="mobarista_assets/slideshow/1.jpg" alt=""></li>
        <li><img class="center-block" src="mobarista_assets/slideshow/2.jpg" alt=""></li>
        <li><img class="center-block" src="mobarista_assets/slideshow/3.jpg" alt=""></li>
      </ul>
      <!-- <div class="center-block" id="fadeshow1"></div> -->
      <!-- <img src="mobarista_assets/site_logo_bigger.png" class="img-responsive center-block" /> -->
<!--       <br />
      <div class="center-block" style="max-width: 300px;">
        <a class="btn btn-lg btn-primary btn-block" href="menu.php" role="button">View Our Menu &raquo;</a>
      </div> -->
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="javascript/responsiveslides.min.js"></script>

    <script>
      $(function() {
        $(".rslides").responsiveSlides({
          maxwidth: 1024
        });
      });
    </script>


    <!-- <script type="text/javascript" src="javascript/fadeslideshow.js"></script> -->
<!--     /***********************************************
    * Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
    ***********************************************/ -->

<!--     <script type="text/javascript">
      var mygallery=new fadeSlideShow({
        wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
        dimensions: [800, 533], //width/height of gallery in pixels. Should reflect dimensions of largest image
        imagearray: [
          ["mobarista_assets/site_logo_bigger.png", "", "", ""],
          ["mobarista_assets/slideshow/1.jpg", "", "", ""],
          ["mobarista_assets/slideshow/2.jpg"],
          ["mobarista_assets/slideshow/3.jpg"]
        ],
        displaymode: {type:'auto', pause:5500, cycles:0, wraparound:false},
        persist: false, //remember last viewed slide and recall within same session?
        fadeduration: 1000, //transition duration (milliseconds)
        descreveal: "ondemand",
        togglerid: ""
      })
    </script> -->

  </body>
</html>
