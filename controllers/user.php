<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

  Author		Ulises Rodríguez
  Site:			http://www.ulisesrodriguez.com	
  Twitter:		https://twitter.com/#!/isc_ulises
  Facebook:		http://www.facebook.com/ISC.Ulises
  Github:		https://github.com/ulisesrodriguez
  Email:		ing.ulisesrodriguez@gmail.com
  Skype:		systemonlinesoftware
  Location:		Guadalajara Jalisco Mexíco

  	
*/

class User extends CI_Controller {

	
	public $data = array();
	
	// Language
	
	// values: spanish or english
	// Default: english
	
	public $language = 'english';
	
	// Language Validator
	public $lang_validator = 'english';




	public function __construct(){
			
		parent::__construct();
		
		// setting language	
		$this->lang->load( 'user', $this->language );			
		
								
	}
	
	
	

/** View Install instructión **/
	
	public function index(){
						
		$this->load->view( 'index' );	
	
	}
	



// View all user	
	public function view_list( $begin = 0 ){
						
		// Load Model
		$this->load->model('users');
		
		
		$this->load->library('pagination');
						
		$data = $this->users->pagination( $begin );
						
		$config['base_url'] = base_url().'user/view_list/';
		$config['total_rows'] = $this->users->record_count();
		$config['per_page'] = 20; 
		
		$this->pagination->initialize($config); 
				
		// Load view		
		$this->load->view( 'list', array( 'data' => $data ) );	
		
	}
	
	





// View record
	public function view( $id = 0 ){
		
				
		$this->load->model('users');
						

		$this->load->view( 'view', array( 'data' => $this->users->id( $id ) ) );	
				
		
	}
	
	
	
	





// Create new 	
	
	public function create( ){
							
										
		if( !empty( $_POST ) ){
			
			
				
			// Setting validation rules 
			$this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email|callback__chekmail|xss_clean');
			$this->form_validation->set_rules('address', 'Direccion', 'trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'Telefono', 'trim|required|numeric|xss_clean');
			$this->form_validation->set_rules('comments', 'Observaciones', 'trim');
			$this->form_validation->set_rules('user', 'Usuario', 'trim|required|callback__chekuser|xss_clean');
			$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password_', 'Repetir Contraseña', 'trim|required|matches[password]|xss_clean');
			
		
		
			
			// Setting messages
			$this->form_validation->set_message( 'required', $this->lang->line( 'validation_required' ) );
			$this->form_validation->set_message( 'valid_email', $this->lang->line( 'validation_valid_email' ) );
			$this->form_validation->set_message( 'callback__chekmail', $this->lang->line( 'validation_callback__chekmail' ) );
			$this->form_validation->set_message( 'numeric', $this->lang->line( 'validation_numeric' ) );
			$this->form_validation->set_message( 'matches', $this->lang->line( 'validation_matches' ) );

		
		
				
			if ( $this->form_validation->run() == TRUE ){
				
				
				
				// Load model
				$this->load->model('users');
				
				
				
				
				// Upload file														
				if( !empty( $_FILES["file"]["tmp_name"] ) ){
					
					$name = str_replace( ' ', '-', $_FILES["file"]["name"] );
				
					move_uploaded_file( $_FILES["file"]["tmp_name"], APPPATH.'modules/user/assets/images/' . $name );
																	
					
				}else{
					$name = 'default.jpg';	
				}
				
				
				// Add img name
				$_POST['img'] = $name;						
				
				
				
										
				// Saved the user	
				if( $this->users->create( $this->input->post() ) == true ){
					
					
					// Set true message		
					$this->session->set_flashdata( 'message', array( 
							
						'message' => $this->lang->line( 'saved_true' )
									
					));												
					
					
					redirect( 'user/view_list', 'refresh' );
						
												
				}else{
					
					
					 // Set false message	
					  $this->session->set_flashdata( 'message', array( 
							  
						'message' => $this->lang->line( 'saved_false' )
									  
					  ));												
						
					  redirect( 'user/view_list', 'refresh' );
						
						
				}	
					
			}
			
		}
						
		
		$this->data = array(
			
			'validator' => $this->lang_validator
		
		);	
		
		$this->load->view( 'create', $this->data );
		
						
	}







// Update


  public function update( $id = 0 ){
  	
	
		// Load model		
		$this->load->model( 'users' );
		
		
		if( !empty( $_POST ) ){
				
			
			
			// Get data
			$valid = $this->users->id( $id );
			
			
			
			
			
			// Setting validation rules 
					
			$this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
			
			if( $valid[0]['email'] != $this->input->post('email') ){
			
				$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email|callback__chekmail|xss_clean');
			
			}
			
			$this->form_validation->set_rules('address', 'Direccion', 'trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'Telefono', 'trim|required|numeric|xss_clean');
			
			if( $valid[0]['user'] != $this->input->post('user') ){
			
				$this->form_validation->set_rules('user', 'Usuario', 'trim|required|callback__chekuser|xss_clean');
			
			}
			
			$password = $this->input->post('password');
			
			if( !empty( $password ) ){
			
				$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|xss_clean');
				$this->form_validation->set_rules('password_', 'Repetir Contraseña', 'trim|required|matches[password]|xss_clean');
			
			}
			
			
			
			// Setting messages
			$this->form_validation->set_message( 'required', $this->lang->line( 'validation_required' ) );
			$this->form_validation->set_message( 'valid_email', $this->lang->line( 'validation_valid_email' ) );
			$this->form_validation->set_message( 'callback__chekmail', $this->lang->line( 'validation_callback__chekmail' ) );
			$this->form_validation->set_message( 'numeric', $this->lang->line( 'validation_numeric' ) );
			$this->form_validation->set_message( 'matches', $this->lang->line( 'validation_matches' ) );
			
			
			
			
			
							
			if ( $this->form_validation->run() == TRUE ){
				
				
				
																						
				if( !empty( $_FILES["file"]["tmp_name"] ) ){
					
					
					// Delete old img 
					if( is_file( APPPATH.'modules/user/assets/images/' . $valid[0]['img'] ) and $valid[0]['img'] != 'default.jpg' ){
						unlink( APPPATH.'modules/user/assets/images/' . $valid[0]['img'] );
					}
					
					$name = str_replace( ' ', '-', $_FILES["file"]["name"] );
				
					move_uploaded_file( $_FILES["file"]["tmp_name"], APPPATH.'modules/user/assets/images/' . $name );
										
					
				}else{
					$name = $valid[0]['img'];	
				}
				
				
				// Add img name
				$_POST['img'] = $name;		
				
								
				if( $this->users->update( $this->input->post(), $id ) == true ){
							
					// Set true message		
					$this->session->set_flashdata( 'message', array( 
							
						'message' => $this->lang->line( 'saved_true' )
									
					));												
					
					
					redirect( 'user/view_list', 'refresh' );
						
												
				}else{
						
					// Set false message	
					 $this->session->set_flashdata( 'message', array( 
							  
						'message' => $this->lang->line( 'saved_false' )
									  
					  ));												
						
					 redirect( 'user/view_list', 'refresh' );
						
						
				}	
					
			}
			
		}
		
		
		$this->data = array(
			
			'validator' => $this->lang_validator,
			
			'data' =>  $this->users->id( $id )
			
		);	
		
		$this->load->view( 'edit', $this->data );	
		
				
  } 	






// Delete record


  public function delete( $id = 0 ){
  		
		
		// Load model
		
		$this->load->model( 'users' );
		
		$valid = $this->users->id( $id );
		
		
		
		// Delete img 
		if( is_file( APPPATH.'modules/user/assets/images/' . $valid[0]['img'] ) and $valid[0]['img'] != 'default.jpg' ){
			unlink( APPPATH.'modules/user/assets/images/' . $valid[0]['img'] );
		}
		
		
		if( $this->users->delete( $id ) ){
					
			// Set false message	
			$this->session->set_flashdata( 'message', array( 
					
			  'message' => $this->lang->line( 'delete_true' )
							
			));												
			  
			redirect( 'user/view_list', 'refresh' );
			
		}else{
			
			 // Set false message	
			$this->session->set_flashdata( 'message', array( 
					
			  'message' => $this->lang->line( 'delete_false' )
							
			));												
			  
			redirect( 'user/view_list', 'refresh' );
			
		}
	
  } 	
  
  
  
  
  
  
  
  

/**
 *  Verification data email and login user
 */  
  
  public function chekuser(){
 	
	if( !$this->input->is_ajax_request() )
		redirect( '/' );
	
	 // Load Model	
  	 $this->load->model( 'users' );
	 
	 
	 if( $this->users->user( $this->input->post('user') ) == true ){
	 	
		$data = '{';
		
		$data .=' "message": "<img src=\"'.base_url().'user/assets/images/true.png\" width=\"15\" heigth=\"15\">'.$this->lang->line( 'validation_user_true' ).'",';
		
		$data .=' "type": true';
		
		$data .= '}';
		
		echo $data;
		
		return false;
		
		
	
	 }else{
	    
		$data = '{';
		
		$data .=' "message": "<img src=\"'.base_url().'user/assets/images/false.png\" width=\"15\" heigth=\"15\">'.$this->lang->line( 'validation_user_false' ).'",';
		
		$data .=' "type": false';
		
		$data .= '}';
		
		echo $data;
		
		return false;
		
	
	 }
  
  }
  
     
  public function chekmail(){
  	 
	 if( !$this->input->is_ajax_request() )
		redirect( '/' );
	 	      	 	 
	 // Validation email 
	 if ( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $this->input->post('email') ) ) {
		
		$data = '{';
		
		$data .=' "message": "<img src=\"'.base_url().'user/assets/images/false.png\" width=\"15\" heigth=\"15\">'.$this->lang->line( 'validation_email_invalid' ).'",';
		
		$data .=' "type": false';
		
		$data .= '}';
		
		echo $data;
		
		return false;
	
	 }
	 
	 
	
	 
    	 
	 // Load model 
	 $this->load->model( 'users' );
	
	
	
	
	 if( $this->users->mail( $this->input->post('email') ) == true ){
	 	
		$data = '{';
		
		$data .=' "message": "<img src=\"'.base_url().'user/assets/images/true.png\" width=\"15\" heigth=\"15\">'.$this->lang->line( 'validation_email_true' ).'",';
		
		$data .=' "type": true';
		
		$data .= '}';
		
		echo $data;
		
		return true;
	
	 }else{	
		
		
		$data = '{';
		
		$data .=' "message": "<img src=\"'.base_url().'user/assets/images/false.png\" width=\"15\" heigth=\"15\">'.$this->lang->line( 'validation_email_false' ).'",';
		
		$data .=' "type": false';
		
		$data .= '}';
		
		echo $data;
		
		return true;
			
	 }
		
  }
  
	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */

?>