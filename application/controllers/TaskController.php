<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller {
	function __construct() {
			
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('TaskModel');
			$this->load->helper('date');
		}
	public function index()
	{	
		$data['modal'] = $this->load->view('modal/index', NULL, TRUE);

		$data['tasklist'] = $this->TaskModel->tasklist();

		$this->load->view('template/header');
		$this->load->view('home/index',$data);
		$this->load->view('template/footer');
	}

	public function tasksave() {

		$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'dateCreated' => time(),
				'dateUpdated' => time()
			);
		$save = $this->TaskModel->saveTask($data);

		if($save == 'true') {

			$datas['success'] = true;

			$datas['message'] = 'successfully Save';
 		
 		} else {

 			$datas['success'] = false;

			$datas['message'] = 'Task is already inputed';

 		}
		echo json_encode($datas);
	}

	public function taskdelete() {

		$data = array('id' => $this->input->post('id') );
		$delete = $this->TaskModel->deleteTask($data);
		if($delete == 'true') {
			$datas['success'] = true;

			$datas['message'] = 'successfully deleted';
		}
		echo json_encode($datas);
	}

	public function taskupdate() {

		$id = $this->input->post('id');
		$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'dateUpdated' => time()
			);

		$update = $this->TaskModel->updateTask($id,$data);

		if($update == 'true') {

			$datas['success'] = true;

			$datas['message'] = 'successfully Updated';

		} else {

			$datas['success'] = false;

			$datas['message'] = 'Task is already inputed';

		}
		echo json_encode($datas);
	}
}