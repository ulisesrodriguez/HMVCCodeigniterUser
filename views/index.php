<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!--
/*
======================================================================================

  Author		Ulises Rodriguez
  Site:			http://www.ulisesrodriguez.com	
  Twitter:		https://twitter.com/#!/isc_ulises
  Facebook:		http://www.facebook.com/ISC.Ulises
  Github:		https://github.com/ulisesrodriguez
  Email:		ing.ulisesrodriguez@gmail.com
  Skype:		systemonlinesoftware
  Location:		World
   

====================================================================================== */
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ulises Rodríguez | <?php echo $this->lang->line( 'basic_title' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>user/assets/bootstrap/css/bootstrap.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>user/assets/bootstrap/css/bootstrap-responsive.css" /> 
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Ulises Rodriguez</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url() ?>user/">Home</a></li>
              <li><a href="<?php echo base_url() ?>user/view_list.html">View</a></li>
              <li><a href="<?php echo base_url() ?>user/create.html">Create</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1><?php echo $this->lang->line( 'basic_title' ); ?></h1>
      <p><?php echo $this->lang->line( 'basic_description' ); ?>.</p>
      
      <h3><?php echo $this->lang->line( 'basic_install' ); ?></h3>
      <p>1.- Download this. <a href="https://github.com/ulisesrodriguez/codeiginiter-users-hmvc" target="_blank">here</a> </p>
      <p>2.- Download Codeigniter. <a href="http://ellislab.com/codeigniter" target="_blank">here</a></p>
      <p>3.- Download HMVC Extension for codeigniter. <a href="https://github.com/Crypt/Codeigniter-HMVC" target="_blank">here</a></p>  
      
      <p>4.- Decompress file rar pack HMVC, config the pack HMVC.</p>  
      
      <p>5.- Decompress the módule user.</p>  
      
      <p>6.- Copy the module files to application/modules/.</p>  
      
      <p>7.- Install the table in your database.</p>  
      
      <p>8.- Run http://youcodeigniterinstalation/user.</p>  
      
      <br><br><br><br>
      
      
      
    
      <footer>
        <p> <?php echo $this->lang->line( 'install_powered' ); ?> &copy; Ulises Rodríguez  <?php echo date( 'Y' ) ?> </p>
        <p>  
             <a class="btn" href="http://www.ulisesrodriguez.com" target="_blank">Site</a> 
        	 <a class="btn" href="https://github.com/ulisesrodriguez/" target="_blank">Github</a>  
             <a class="btn" href="http://www.facebook.com/ISC.Ulises" target="_blank">Facebook</a>  
             <a class="btn" href="https://twitter.com/#!/isc_ulises" target="_blank">Twitter</a> 
        </p>
      </footer>  
    
    </div> <!-- /container -->
	
    
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>user/assets/bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>