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
	  .error{ font-weight: bold; color:#9D0020 }
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
              <li><a href="<?php echo base_url() ?>user/">Home</a></li>
              <li class="active"><a href="<?php echo base_url() ?>user/view_list.html">View</a></li>
              <li><a href="<?php echo base_url() ?>user/create.html">Create</a></li> 
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Módule User admin Codeigniter HMVC</h1>
      
      <h2><?php echo $this->lang->line( 'title_view' ); ?></h2>

      <?php 
	  	
		if( empty( $data ) ):
		
	  ?>
	      
    
      <div class="alert alert-error">
  		 <p><img src="<?php echo base_url() ?>user/assets/images/false.png" width="15" heigth="10"><?php echo $this->lang->line( 'table_no_exist' ); ?></p>
                  
	  </div>
      
      <?php endif; ?>
     
      <?php 
	  	
		if( !empty( $data ) ):
		
	  ?>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'table_created' ); ?></h4></div>
          <div class="span8"><?php echo date( 'd-m-Y H:i:s', $data[0]['created'] ) ?></div>
      </div>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'table_modify' ); ?></h4></div>
          <div class="span8"><?php echo date( 'd-m-Y H:i:s', $data[0]['modify'] ) ?></div>
      </div>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_name' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['name'] ?></div>
      </div>
 	  
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_email' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['email'] ?></div>
      </div>	
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_address' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['address'] ?></div>
      </div>	     
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_phone' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['phone'] ?></div>
      </div>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_comments' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['comments'] ?></div>
      </div>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_user' ); ?></h4></div>
          <div class="span8"><?php echo $data[0]['user'] ?></div>
      </div>
      
      <div class="row">
          <div class="span4"><h4><?php echo $this->lang->line( 'form_photo' ); ?></h4></div>
          <div class="span8"><img src="<?php echo base_url() ?>user/assets/images/<?php echo $data[0]['img'] ?>"></div>
      </div>
                  
      <br><br><br>
      
      <div class="row">
          <div class="span4">  
		  		<?php echo anchor( 'user/update/' . $data[0]['id'], $this->lang->line( 'table_option_update' ), array( 'class' => 'btn' ) ); ?>
          		<a class="btn" href="javascript:void(0)" onclick="javascript: if( confirm( '<?php echo $this->lang->line( 'table_option_delete_confirm' ); ?>' ) ){ window.location='<?php echo base_url() . 'user/delete/' . $data[0]['id'] ?>'; }else{ return false; }"><?php echo $this->lang->line( 'table_option_delete' ); ?></a>
          </div>
          <div class="span8"></div>
      </div>
      
      <br><br><br><br><br>
      
      <?php endif; ?>
      
     
      
      
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
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
    <script src="<?php echo base_url() ?>user/assets/plugins/jquery_textarea/jquery.textareaCounter.plugin.js"></script>
    <script src="<?php echo base_url() ?>user/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url() ?>user/assets/scripts/md5.js"></script>
	       
  </body>
</html>