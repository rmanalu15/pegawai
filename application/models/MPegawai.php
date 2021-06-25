<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPegawai extends CI_Model
{
    var $table = 'reg_pegawai';
    var $kolom_order = array('kode_regpegawai', 'nama_regpegawai', 'jenis_kelamin_regpegawai', 'kelahiran_regpegawai', 'nomor_telepon_regpegawai', 'alamat_regpegawai', null);
    var $kolom_cari = array('kode_regpegawai', 'nama_regpegawai');
    var $order = array('kode_regpegawai' => 'DESC');

    private function _getQuery()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->kolom_cari as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->kolom_cari) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function countFiltered()
    {
        $this->_getQuery();
        $query = $this->db->get('')->num_rows();
        return $query;
    }

    public function countAll()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function dataPegawai()
    {
        $this->_getQuery();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get('')->result();
        return $query;
    }
}
