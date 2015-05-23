<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FAARMs is a singular DIY project bringing technology to small scale farming and bringing the future to the present.">	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FAARMs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--<script> $(function () {
  $('[data-toggle="popover"]').popover()
  $('[data-toggle="popover"]').popover(options)			
  })</script> --> 

  <!-- Custom CSS for gallery-->
  <link href="css/thumbnail-gallery.css" rel="stylesheet">
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <div class="container">
	
	<!--gallery start --> <!-- Used http://startbootstrap.com/template-overviews/thumbnail-gallery/ --> 
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Gallery</h1>
				<h3>Tomatoes</h3>
			</div>

			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird6.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird6.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird2.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird2.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird3.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird3.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird4.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird4.jpg" alt="gallery1">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird5.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird5.jpg" alt="gallery2">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird7.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird7.jpg" alt="gallery3">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird8.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird8.jpg" alt="gallery4">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird9.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird9.jpg" alt="gallery5">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird19.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird19.jpg" alt="gallery6">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird10.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird10.jpg" alt="gallery7">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird11.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird11.jpg" alt="gallery8">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird12.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird12.jpg" alt="gallery9">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird13.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird13.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird14.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird14.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird15.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird15.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird20.jpg">
					<img class="img-responsive" src="http://cdn77.sadanduseless.com/wp-content/uploads/2014/05/weird20.jpg" alt="gallery1">
				</a>
			</div>
		</div>
		<!-- gallery end --> 

	 </div>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>