<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index($para1='')
	{
		if($para1=='to_add')
		{
			$data['name']=$this->input->post('name');
			$data['age']=$this->input->post('age');

			$this->db->insert('banner',$data);
			$this->load->view('admin/list_banner');
		}
		elseif($para1=='edit')
		{	
			$id = $this->uri->segment(4);
	        $this->db->select('id,name,age');
	        $this->db->where('id',$id);
	        $query = $this->db->get('banner');
	        $users = $query->row();
	        //echo $this->db->last_query();
	         $data = array();
	        if (isset($users))
	        {
	            $data=array('user_id'=>$users->id,'user_name'=>$users->name,'user_age'=>$users->age);
	        }
	        //print_r($data);
	            $this->load->view('admin/edit_banner',$data);
		}
		elseif ($para1=='update') 
		{	
			$id=$this->input->post('id');
			$data['name']=$this->input->post('name');
			$data['age']=$this->input->post('age');

			$this->db->where('id',$id);
			$this->db->update('banner',$data);
		}
		elseif($para1=='delete')
		{
			$id = $this->input->post('id');
			$this->db->where('id',$id);
            $this->db->delete('banner');
            redirect(base_url('admin/index'));
		}
		elseif($para1=='add')
		{
			$this->load->view('admin/add_banner');
		}
		else
		{
			$data['listdata']=$this->db->get('banner')->result_array();
			$this->load->view('admin/list_banner',$data);
		}
	}
	
}
