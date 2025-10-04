<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Master Kelas'; // Pass dynamic title
		$data['userObject'] = (object) ['name' => 'Username'];
        $this->load->view('template/atas', $data);
		// $this->load->view('template/templateTable');
        // $this->load->view('kelas/list', $data);
        // $this->load->view('used/footer');

		$this->load->view('kelas/list');
	}

	public function add()
	{
		$post_data = $this->input->post();
		$this->db->insert('kelas', $post_data);
	}

	public function update()
	{
		$post_data = $this->input->post();
		$this->db->where('id', $post_data['idkelas']);
		$this->db->update('kelas', $post_data);
	}
}
