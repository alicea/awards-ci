<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	 * class constructor
	 *
	 * @return \Home
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('Names', '', TRUE);
		$data['names'] = $this->Names->get();

		$this->load->view('awards', $data);
	}

	public function email()
	{
		$this->load->helper('url');
		$this->load->model('Users', '', TRUE);
		$this->load->model('Answers', '', TRUE);
		$success = false;
		$award = false;
		if ($this->input->post()){
			$inputEmail = $this->input->post('_email');
			$user_id = $this->session->userdata('user_id');
			if ($id = $this->Users->getByEmail($this->input->post('_email')))
			{
				//user already exists
				if($number = $this->Answers->getUnAnswered($id)){
					$award = $number;
				}

				$response = $id;
				$this->session->set_userdata('user_id', $id);
				$success = false;
				//}
			}else{
				//$this->Users->email = $inputEmail;
				$response = $this->Users->save(array('email' => $inputEmail));
				$this->session->set_userdata('user_id', $response);
				$success = true;
			}
		}else{
			// return Response::error('500');
			$success = false;
		}

		//$response = $this->load->view('awards', null, true);

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode(array('success' => $success, 'result' => $response, 'unanswered' => $award)));

	}

	public function award()
	{
		$response = false;
		$success = false;
		$name = true;
		$this->load->model('Names', '', TRUE);
		$this->load->model('Users', '', TRUE);
		$this->load->model('Answers', '', TRUE);
		if ($this->input->post()){
			$table = 'award'.$this->input->post('_award');
			if($user = $this->input->post('_id')){
				if(!$this->Answers->getByUserId($user, $table)){

					if(!$this->Names->getValidName($this->input->post('_name'))){
						$response = false;
						$success = false;
						$name = false;
					}
						$response = $this->Answers->save(array('vote' => $this->input->post('_name'), 'user_id' => $this->input->post('_id')), $table);
						$this->session->set_userdata('user_id', $user);
						$success = true;
				}
			}

		}else{
			$response = false;
			$success = false;
			$name = false;
		}

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode(array('success' => $success, 'result' => $response, 'name' => $name)));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */