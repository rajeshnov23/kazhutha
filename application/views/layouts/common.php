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
	

	<div class="container">
		 <?php echo $template['body']; ?>
	</div>


	
	
	<div id="social">
		
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
