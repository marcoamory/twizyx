<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>TwizyX : gestion en ligne</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    <link href="assets/css/mon_css.css" rel="stylesheet" />
    <link href="datepicker/css/datepicker.css" rel="stylesheet" />
    
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-yellow navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/marco.jpg">
                        </div>
                        <div class="brand">
                            <?php
	                        if(isset($_SESSION['nom']) AND isset($_SESSION['prenom']))
	                        {
	                        	echo $_SESSION['nom'] . " " . $_SESSION['prenom'];  
							}
							else
							{
								echo $_SESSION['email'];
							}
	                        ?> 
                        </div>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="components.html">Préférences</a></li>
                    <li><a href="components.html">Mon profil</a></li>
                    <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mes véhicules<b class="caret"></b></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">Twizy 45 (10/10/2015)</a></li>
		                <li><a href="#">Twizy 80 (08/11/2015)</a></li>
		                <li><a href="#">Twizy 45 (23/02/2016)</a></li>
		                <li class="divider"></li>
		                <li><a href="index.php?page=order.php">Encoder un nouveau véhicule</a></li>
		              </ul>
		
		            </li>
                    
                    <li><a href="../../deconnexion.php" class="btn btn-round btn-default">Déconnexion</a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="img-src" style="background-image: url('assets/img/cover_twizyx.jpg')"></div>
        <div class='img-src blur' style="background-image: url('assets/img/cover_twizyx_blur.jpg')"></div>
    </div>
    
</div>     
    


<div class="main">
    <div class="container tim-container">
       
        <?php include_once($_GET['page']); ?>
        
    </div>
<!-- end container -->
<div class="space-30"></div>
</div>


<!-- end main -->

<div class="parallax-pro">
    <div class="img-src" style="background-image: url('assets/img/footer_image.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            </div>
            <div class="col-md-6 col-md-offset-3 col-md-12 text-center">
                <h1 class="hello text-center">
                   <a href="http://gsdk.creative-tim.com" style="line-height: 60px;">Vous aimez votre nouvelle <span class="texte_jaune">TwizyX</span> ?</a>
                   <small>
                    <ul class="list-unstyled">
	                    <li></li>
	                    <li>Faites le savoir sur notre page Facebook et gagnez le remboursement de votre reprogrammation !</li>
                    </ul>
                    </small>
                </h1>
                 <div class="actions">
                     <a class="btn btn-lg btn-info btn-fill" href="https://www.facebook.com/twizyx/">Remboursez votre modification !</a>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
             <div class="col-md-12 text-center">
                <div class="credits">
                    &copy; <script>document.write(new Date().getFullYear())</script> Made with <i class="fa fa-heart heart" alt="love"></i> by TwizyX Team.
                </div>
            </div>
        </div>
    </div>

</div>

</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="assets/js/mon_js.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });
    
</script>
</html>