<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MAuth extends CI_Model
{
    public function getDataLogin()
    {
        $kode = $this->session->userdata('kode_regpegawai');
        $this->db->where('kode_regpegawai', $kode);
        $query = $this->db->get('reg_pegawai')->row_array();
        return $query;
    }

    public function getKode()
    {
        $query = $this->db->query("SELECT MAX(RIGHT(kode_regpegawai, 3)) 
        AS kodeMax FROM reg_pegawai 
        WHERE DATE(created_at)=CURDATE()");
        $kode = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int) $k->kodeMax) + 1;
                $kode = sprintf("%03s", $tmp);
            }
        } else {
            $kode = "001";
        }
        return date('dmy') . $kode;
    }
}
