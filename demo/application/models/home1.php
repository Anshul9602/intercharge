<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends CI_Model {

	
	public function insert_data($data)
	{
       
        $this->db->insert('details',$data);
		


		 
	}

	 
		
 
}
