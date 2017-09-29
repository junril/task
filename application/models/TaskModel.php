<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!defined('BASEPATH')) exit('No direct script access allowed');
class TaskModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->table = 'user';              
        }

        public function saveTask($data) {

        	$query = $this->db->select('*')
        	         ->from($this->table)
                     ->where(array('name' => $data['name'],'description' => $data['description']))
        	         ->get();

        	if($query->num_rows() > 0)
        	{
        		return false;

        	} else {

        		$this->db->insert($this->table, $data);

        		return true;
        	}
        }

        public function deletetask($data) {

        	$delete = $this->db->where($data);
        	$delete = $this->db->delete($this->table);
        	 				   
        	 if($delete){
        	 	return true;
        	 } else {
        	 	return false;
        	 }

        }

        public function updateTask($id,$data) {

            $query = $this->db->select('*')
                     ->from($this->table)
                     ->where(array('name' => $data['name'],'description' => $data['description']))
                     ->get();

            if($query->num_rows() > 0)
            {
                return false;

            } else {

                $update = $this->db->where('id',$id)
                        ->update($this->table,$data);

                return true;
            }
        }

        public function tasklist(){

        	$this->db->select('*');
        	$this->db->from($this->table);
        	$this->db->order_by('id','asc');
        	$query = $this->db->get();
            return $query->result();

        }


}