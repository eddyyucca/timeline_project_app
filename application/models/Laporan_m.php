<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_m extends CI_Model
{
    public function laporan()
    {
          $query = $this->db->get('activity');
                  $this->db->order_by('activity', 'DESC');
          return $query->result();
    }
}

/* End of file Laporan_m.php */
