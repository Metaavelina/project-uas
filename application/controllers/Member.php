<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}

		$this->load->model('M_perpus', 'perpus');
	}

	function index(){
		$data['transaksi'] = $this->db->query("SELECT * from transaksi order by id_pinjam desc limit 10")->result();
		$data['anggota'] = $this->db->query("SELECT * from anggota order by id_anggota desc limit 10")->result();
		$data['buku'] = $this->db->query("SELECT * from buku B, kategori K where B.id_kategori=K.id_kategori")->result();
		$data['kategori'] = $this->M_perpus->get_data('kategori')->result();

		$this->load->view('member/header');
		$this->load->view('member/index', $data);
		$this->load->view('member/footer');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}

	function ganti_password(){
		$this->load->view('member/header');
		$this->load->view('member/ganti_password');
		$this->load->view('member/footer');
	}

	function ganti_password_act(){
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass', 'Ulangi Password Baru', 'required');
		if($this->form_validation->run() != false){
			$data = array('password' => md5($pass_baru));
			$w = array('id_admin' => $this->session->userdata('id'));
			$this->M_perpus->update_data($w,$data,'admin');
			redirect(base_url().'admin/ganti_password?pesan=berhasil');
		}else{
			$this->load->view('member/header');
			$this->load->view('member/ganti_password');
			$this->load->view('member/footer');
		}
	}

	function buku(){

		$data['buku'] = $this->db->query("SELECT * from buku B INNER JOIN kategori K ON B.id_kategori=K.id_kategori ORDER BY id_buku")->result();
		$data['anggota'] = $this->db->query("SELECT * from anggota order by id_anggota desc limit 10")->result();
		
		$this->load->view('member/header');
		$this->load->view('member/buku/index', $data);
		$this->load->view('member/footer');
	}

	public function anggota()
	{
		$data['anggota'] = $this->perpus->get_data('anggota')->result();
		$this->load->view('member/header');
		$this->load->view('member/anggota/index', $data);
		$this->load->view('member/footer');
	}

	public function profil()
	{
		$data['anggota'] = $this->perpus->get_data('anggota')->result();

		$this->load->view('member/header');
		$this->load->view('member/profil/index', $data);
		$this->load->view('member/footer');	
	}

	public function update_profil()
	{
		$id = $this->input->post('id_anggota');
		$nama_anggota = $this->input->post('nama_anggota');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'nama_anggota' => $nama_anggota,
			'alamat' => $alamat,
			'email' => $email,
			'no_telp' => $no_telp
		);

		$where = array('id_anggota' => $id);

		$this->perpus->update_profil('anggota', $data, $where);
		redirect(base_url().'member');
	}

}

?>