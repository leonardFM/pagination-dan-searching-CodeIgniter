<?php  

class Peoples extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Data User';

		$this->load->model('Peoples_model', 'peoples');

		// pagination
		$this->load->library('pagination');

		// ambil data user di keyword

		if($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		// config
		
		$this->db->like('name', $data['keyword']);
		$this->db->from('peoples');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page']= 12;


		// inisialisasi

		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
		

		$this->load->view('template/header', $data);
		$this->load->view('peoples/index', $data);
		$this->load->view('template/footer');
	}
}


?>