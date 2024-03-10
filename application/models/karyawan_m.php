<?php
defined('BASEPATH') or exit('No direct script access allowed');

class karyawan_m extends CI_Model
{
    public function karyawan()
    {
        $query = $this->db->get('karyawan');
        $this->db->order_by('karyawan', 'ASC');
        return $query->result();
    }
}

/* End of file Laporan_m.php */
