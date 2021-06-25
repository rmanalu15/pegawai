<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        log_koperasi();
    }

    public function index()
    {
        $data['user'] = $this->auth->getDataLogin();
        $this->load->view('pages/header');
        $this->load->view('pages/sidebar', $data);
        $this->load->view('pages/topbar');
        $this->load->view('pegawai/data', $data);
        $this->load->view('pages/footer');
    }

    public function dataPegawai()
    {
        $list = $this->pegawai->dataPegawai();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pegawai) {
            $no++;
            $row = array();
            $row[] = $pegawai->kode_regpegawai;
            $row[] = $pegawai->nama_regpegawai;
            $row[] = $pegawai->jenis_kelamin_regpegawai;
            $row[] = $pegawai->kelahiran_regpegawai;
            $row[] = $pegawai->nomor_telepon_regpegawai;
            $row[] = $pegawai->alamat_regpegawai;

            $row[] = '<button class="btn-success" id="edipeg" title="Edit" data="' . $pegawai->kode_regpegawai . '">Edit</button>
    		<button class="btn-danger" id="delpeg" title="Delete" data="' . $pegawai->kode_regpegawai . '">Delete</button>';

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->pegawai->countAll(),
            "recordsFiltered" => $this->pegawai->countFiltered(),
            "data" => $data,
        );
        echo json_encode($output);
    }
}
