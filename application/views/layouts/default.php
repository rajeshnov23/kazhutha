<!DOCTYPE html>
<html lang="en">
  <head>
      <title><?php echo $template['title']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bolt - Free Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />

 <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/nprogress.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/nprogress.css'); ?>" type="text/css"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     <?php echo $template['metadata']; ?>
  </head>

  <body>

        <script>

            NProgress.start();
var base_url='<?php echo site_url(); ?>/';
var top_url='<?php echo base_url(); ?>';
        </script>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="<?php echo active_menu("home", "index") ?>"><a href="<?php echo base_url('home/index') ?>">Home</a></li>
            <li class="<?php echo active_menu("home", "kazhutha") ?>"><a href="<?php echo base_url('home/kazhutha') ?>">Kazhutha</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<h1>Bolt Theme</h1>
	    			<h2>FREE BOOTSTRAP THEMES</h2>
	    		</div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /hello -->
	
	<div id="green">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 centered">
					<img src="<?php echo base_url() ?>assets/img/iphone.png" alt="">
				</div>
				
				<div class="col-lg-7 centered">
					<h3>WHAT WE CAN DO?</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row centered mt grid">
			<h3>OUR LATEST WORK</h3>
			<div class="mt"></div>
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/01.jpg" alt=""></a>
			</div>
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/02.jpg" alt=""></a>
			</div>
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/03.jpg" alt=""></a>
			</div>
		</div>
		
		<div class="row centered mt grid">
			<div class="mt"></div>		
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/04.jpg" alt=""></a>
			</div>
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/05.jpg" alt=""></a>
			</div>
			<div class="col-lg-4">
				<a href="#"><img src="<?php echo base_url() ?>assets/img/06.jpg" alt=""></a>
			</div>
		</div>
		
		<div class="row mt centered">
			<div class="col-lg-7 col-lg-offset-1 mt">
					<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
			</div>
			
			<div class="col-lg-3 mt">
				<p><button type="button" class="btn btn-theme btn-lg">Email Me!</button></p>
			</div>
		</div>
	</div>


	<div id="skills">
		<div class="container">
			<div class="row centered">
				<h3>OUR SKILLS</h3>
				<div class="col-lg-3 mt">
					<canvas id="javascript" height="130" width="130"></canvas>
					<p>Javascript</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 70,
									color:"#74cfae"
								},
								{
									value : 30,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="bootstrap" height="130" width="130"></canvas>
					<p>Bootstrap</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 90,
									color:"#74cfae"
								},
								{
									value : 10,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="wordpress" height="130" width="130"></canvas>
					<p>Wordpress</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 65,
									color:"#74cfae"
								},
								{
									value : 35,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<div class="col-lg-3 mt">
					<canvas id="photoshop" height="130" width="130"></canvas>
					<p>Photoshop</p>
					<br>
					<script>
						var doughnutData = [
								{
									value: 50,
									color:"#74cfae"
								},
								{
									value : 50,
									color : "#3c3c3c"
								}
							];
							var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /skills -->
	
	<section id="contact"></section>
	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="col-md-3">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<div class="col-md-3">
						<a href="#"><i class="fa fa-dribbble"></i></a>
					</div>
					<div class="col-md-3">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="col-md-3">
						<a href="#"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /social -->


	<div id="f">
		<div class="container">
			<div class="row">
				<p>Crafted with <i class="fa fa-heart"></i> by BlackTie.co.</p>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
          <script>
$(window).load(function(){
   NProgress.done();
})
</script>
  </body>
</html>
