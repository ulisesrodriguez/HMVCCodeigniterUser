<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Model {
/*
	
	Author		Ulises Rodríguez
	Site:		http://www.ulisesrodriguez.com	
	Twitter:	https://twitter.com/#!/isc_ulises
	Facebook:	http://www.facebook.com/ISC.Ulises
	Github:		https://github.com/ulisesrodriguez
	Email:		ing.ulisesrodriguez@gmail.com
	Skype:		systemonlinesoftware
	Location:	Guadalajara Jalisco Mexíco
	
  	
 */



/**
 | @Attr 
 | data ->  Save Array List
 | table ->  Name table in database
 **/   
	

	private $data = array();
			
	private $table = 'users';



// Clean $this->data
    public function __construct(){
		
        parent::__construct();
		
		unset( $this->data );
		
		$this->data = array();
		
	}





// Create new user
    public function create( $values = array() ){
        		
		// Valid if not empty data				
		if( empty( $values ) ) return false; 
		
		
		// Setting news values
		$values['password_js'] = $values['password']; 
		
		$values['password_php'] = md5( $values['password'] ); 
		
		$values['created'] = strtotime( date( 'Y-m-d H:i:s' ) );
		
		$values['modify'] = strtotime( date( 'Y-m-d H:i:s' ) );
		
		
		// Unset and clean data
		unset( $values['password'], $values['password_'] );
		
				
		// Save									
	    if( $this->db->insert( $this->table, $values ) )
        	
			return true;
        
		else
        	
			return false;
        	
			
		
    }



// Update record

    public function update( $values = array(), $id = 0 ){
        
		
		// Valid not empty
		if( empty( $values ) and !empty( $id ) ) return false;
				
				
			// Clean	
			unset($this->data);
			
			$this->data = array();
			
			if( !empty( $values['password']  ) ){
			
				// Setting news values
				$values['password_js'] = $values['password']; 
				
				$values['password_php'] = md5( $values['password'] ); 
				
				
			
			}
			
			$values['modify'] = strtotime( date( 'Y-m-d H:i:s' ) );
			
			// Unset and clean data
			unset( $values['password'], $values['password_'] );
						
						
        if( $this->db->update( $this->table , $values, array('id' => $id ) ) ){
			return true;
        }else{
        	return false;
        }
		
		
    }



// Remove Record
	
	 public function delete( $id ){
        
		if( empty( $id ) ) return false;		
		
		if( $this->db->query( 'DELETE FROM '.$this->table.' WHERE id=\''.strip_tags($id).'\'' ) ){
		
				return true;
		
				
		}
		
    }










// Getting user for pagination
	public function pagination( $begin = 0 ){
		
		
		// Clean data
		unset( $this->data );
		
		$this->data = array();
		
		$this->db->select();
		$this->db->from( $this->table );
		$this->db->limit( 50, $begin );
								
		$query = $this->db->get();
		
		if ( $query->num_rows() == 0 ) return false;
		
			
						
		foreach ( $query->result() as $row ){
			  
			  
			 
			  $this->data[] = array( 
				  'id' => $row->id,
				  'name' => $row->name,
				  'email' => $row->email,
				  'address' => $row->address,
				  'phone' => $row->phone,
				  'comments' => $row->comments,
				  'user' => $row->user,
				  'created' =>  date( "d-m-Y H:i:s", $row->created ),
				  'modify' => date( "d-m-Y H:i:s", $row->modify )
	
			  );
			
		}
		
		return $this->data;
		
	}
	
	 public function record_count() {

        return $this->db->count_all( $this->table );

    }

	


// Getting id user
	public function id( $id ){
		
		
		// Clean data
		unset( $this->data );
		
		$this->data = array();
		
		if( empty( $id ) ) return false;
		
		
		$this->db->select();
		$this->db->from( $this->table );
		$this->db->where( 'id', $id );
		$this->db->limit( 1 );
								
		$query = $this->db->get();
		
		
		if ( $query->num_rows() == 0 ) return false;
				
		
		foreach ( $query->result() as $row ){
			
		    $this->data[] = array( 
		    	'id' => $row->id,
				'name' => $row->name,
				'email' => $row->email,
		    	'address' => $row->address,
		    	'phone' => $row->phone,
				'comments' => $row->comments,
				'user' => $row->user,
				'img' => $row->img,
				'created' => $row->created,
				'modify' => $row->modify
		    );
		  
		}
		
		return $this->data;
		
		
	}
	
	
 
/**
 * Validate User not exist
 */
	
	
	public function user( $user = '' ){
		
		if( !empty( $user ) ){
		
		$query = $this->db->query(
			
			'SELECT `name`
			 FROM users 
			 WHERE user=\''.strip_tags( $user ).'\' 
			 ORDER BY id DESC
			 LIMIT 1'
		
		);
		
		if ( $query->num_rows() != 0 ){
			return false;
		}else{
			return true;
		}
		
		}else{
			return false;
		}
		
	}
	
	
	public function mail( $email = '' ){
				
						
		if( !empty( $email ) ){
		
		$query = $this->db->query(
			
			'SELECT `name`
			 FROM users 
			 WHERE email=\''.strip_tags( $email ).'\' 
			 ORDER BY id DESC
			 LIMIT 1'
		
		);
		
		if ( $query->num_rows() != 0 ){
			return false;
		}else{
			return true;
		}
		
		}else{
			return false;
		}
		
	}
	
}
?>