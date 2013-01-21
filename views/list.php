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
              <li><a href="<?php echo base_url() ?>user/">Home</a></li>
              <li class="active"><a href="<?php echo base_url() ?>user/view_list.html">View</a></li>
              <li><a href="<?php echo base_url() ?>user/create.html">Create</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	  
      
      <?php 
	  
	  $message = $this->session->flashdata( 'message' );
      
	  if( isset( $message['message'] ) and !empty( $message['message'] ) ):
	  
	  ?>
      
      <div class="alert alert-success">
         <p><img src="<?php echo base_url() ?>user/assets/images/true.png" width="15" heigth="10"><?php echo $message['message']  ?></p>
      </div>
      
      <?php endif; ?>
      
      
      <fieldset>
      	<legend><?php echo $this->lang->line( 'basic_list' ); ?></legend>
      </fieldset>
      
      
      <table class="table table-striped">
          <thead>
              <tr>
                  <th><?php echo $this->lang->line( 'table_name' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_email' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_address' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_phone' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_user' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_created' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_modify' ); ?></th>
                  <th><?php echo $this->lang->line( 'table_option' ); ?></th>
              </tr>
          </thead>
          
          <tbody>
          
          <?php if( !empty( $data ) ): ?>
          
          <?php foreach( $data as $value ): ?>
          
          <tr>
                  <td><?php echo $value['name'] ?></td>
                  <td><?php echo $value['email'] ?></td>
                  <td><?php echo $value['address'] ?></td>
                  <td><?php echo $value['phone'] ?></td>
                  <td><?php echo $value['user'] ?></td>
                  <td><?php echo $value['created'] ?></td>
                  <td><?php echo $value['modify'] ?></td>
                  <td>
                      <?php echo anchor( 'user/view/' . $value['id'], $this->lang->line( 'table_option_view' ) ); ?><br>
                      <?php echo anchor( 'user/update/' . $value['id'], $this->lang->line( 'table_option_update' ) ); ?><br>
                      <a href="javascript:void(0)" onclick="javascript: if( confirm( '<?php echo $this->lang->line( 'table_option_delete_confirm' ); ?>' ) ){ window.location='<?php echo base_url() . 'user/delete/' . $value['id'] ?>'; }else{ return false; }"><?php echo $this->lang->line( 'table_option_delete' ); ?></a>
                  </td>
          </tr>
          
          <?php endforeach; ?>
                                                                 
          <?php endif; ?>
          
          </tbody>
      </table>
      
      
      <?php echo $this->pagination->create_links(); ?>
      
      
    
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

<?php exit; ?>