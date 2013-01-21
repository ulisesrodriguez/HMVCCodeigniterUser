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
              <li><a href="<?php echo base_url() ?>user/view_list.html">View</a></li>
              <li class="active"><a href="<?php echo base_url() ?>user/create.html">Create</a></li> 
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Módule User admin Codeigniter HMVC</h1>
      
      <h4><?php echo $this->lang->line( 'title_create' ); ?></h4>

      <?php 
	  	
		// Setting errors massage
		$error = validation_errors(); 
	 	
		if( !empty( $error ) ):
		
	  ?>
	
      <div class="alert alert-error">
  		 <p><img src="<?php echo base_url() ?>user/assets/images/false.png" width="15" heigth="10"><?php echo $error ?></p>
                  
	  </div>
      
      <?php endif; ?>
     
      
      
      <?php echo form_open_multipart( '', array( 'id' => 'form' )); ?>
      
      
      <fieldset>
          <legend><?php echo $this->lang->line( 'form_legend_information' ); ?></legend>
             
          
          
            <label><?php echo $this->lang->line( 'form_name' ); ?></label>
            
            <?php 

                  echo form_input(												
                      array(
                        'name'        => 'name',
                        'id'          => 'name',
                        'value'       => set_value('name'),
                        'maxlength'   => '40',
						'placeholder' => $this->lang->line( 'form_name_placeholder' ),
						'class' => 'required'
                      )												
                  );											
                  
              ?>
            
            

            <span class="help-block"><?php echo $this->lang->line( 'form_name_help' ); ?>.</span>
                      
            
            <label><?php echo $this->lang->line( 'form_email' ); ?></label>
            
            <?php 

                  echo form_input(												
                      array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'value'       => set_value('email'),
                        'maxlength'   => '150',
						'placeholder' => $this->lang->line( 'form_email_placeholder' ),
						'onblur'   => 'validEmail(this.value);',
						'class' => 'required email' 
                      )												
                  );											
                  
              ?>
            
            

            <span id="msg-email" class="help-block"><?php echo $this->lang->line( 'form_email_help' ); ?>.</span> 
             
                                                  
            <label><?php echo $this->lang->line( 'form_address' ); ?></label>
            
            <?php 

                  echo form_input(												
                      array(
                        'name'        => 'address',
                        'id'          => 'address',
                        'value'       => set_value('address'),
                        'maxlength'   => '250',
						'placeholder' => $this->lang->line( 'form_address_placeholder' )
                      )												
                  );											
                  
              ?>
            
            

            <span class="help-block"><?php echo $this->lang->line( 'form_address_help' ); ?>.</span> 
            
            
            <label><?php echo $this->lang->line( 'form_phone' ); ?></label>
            
            <?php 

                  echo form_input(												
                      array(
                        'name'        => 'phone',
                        'id'          => 'phone',
                        'value'       => set_value('phone'),
                        'maxlength'   => '20',
						'placeholder' => $this->lang->line( 'form_phone_placeholder' )
                      )												
                  );											
                  
              ?>
            
            

            <span class="help-block"><?php echo $this->lang->line( 'form_phone_help' ); ?>.</span> 
            
                                                                                     
            
            <label><?php echo $this->lang->line( 'form_comments' ); ?></label>
            
            <?php 

                  echo form_textarea(												
                      array(
                        'name'        => 'comments',
                        'id'          => 'comments',
                        'value'       => set_value('comments'),
						'placeholder' => $this->lang->line( 'form_comments_placeholder' ),
						'cols' => '40'

                      )												
                  );											
                 
            ?>	
            
            

            <span id="comments-text" class="help-block"><?php echo $this->lang->line( 'form_comments_help' ); ?>.</span>           
                                                      
           
          
            
                                                    
      </fieldset>
      
      
       <fieldset>
          <legend><?php echo $this->lang->line( 'form_legend_login' ); ?></legend>
           
           
           <label><?php echo $this->lang->line( 'form_user' ); ?></label>
            
            <?php 

                  echo form_input(												
                      array(
                        'name'        => 'user',
                        'id'          => 'user',
                        'value'       => set_value('user'),
                        'maxlength'   => '20',
						'placeholder' => $this->lang->line( 'form_user_placeholder' ),
						'onblur'   => 'validUser(this.value);',
						'class' => 'required'
                      )												
                  );											
                  
              ?>
            
            

            <span id="msg-login" class="help-block"><?php echo $this->lang->line( 'form_user_help' ); ?>.</span> 
           
           
            <label><?php echo $this->lang->line( 'form_photo' ); ?></label>
            
            
            <input type="file" name="file" id="file">
            
                                   
            <span class="help-block"><?php echo $this->lang->line( 'form_photo_help' ); ?>.</span> 
           
           
            <label><?php echo $this->lang->line( 'form_password' ); ?></label>
            
            <?php 

                  echo form_password(												
                      array(
                        'name'        => 'password',
                        'id'          => 'password',
                        'value'       => set_value('password'),
                        'maxlength'   => '150',
						'placeholder' => $this->lang->line( 'form_password_placeholder' ),
						'class' => 'required'

                      )												
                  );											
                  
              ?>
            
            

            <span class="help-block"><?php echo $this->lang->line( 'form_password_help' ); ?>.</span> 
            
            <label><?php echo $this->lang->line( 'form_password_' ); ?></label>
            
            <?php 

                  echo form_password(												
                      array(
                        'name'        => 'password_',
                        'id'          => 'password_',
                        'value'       => set_value('password_'),
                        'maxlength'   => '150',
						'placeholder' => $this->lang->line( 'form_password__placeholder' ),
						'class' => 'required'

                      )												
                  );											
                  
              ?>
            
            

            <span class="help-block"><?php echo $this->lang->line( 'form_password__help' ); ?>.</span> 
         
         	 <hr>
                                       
             <input type="submit" class="btn" value="<?php echo $this->lang->line( 'form_button' ); ?>">
                                                                
      </fieldset>
      
      
      <?php echo form_close() ?>
      
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
	<?php if( $validator == 'english' ): ?>
    	<script src="<?php echo base_url() ?>user/assets/scripts/en_validator.js"></script>
    <?php else: ?>
    	<script src="<?php echo base_url() ?>user/assets/scripts/es_validator.js"></script>
    <?php endif; ?>
	<script src="<?php echo base_url() ?>user/assets/scripts/users.js"></script>
       
  </body>
</html>