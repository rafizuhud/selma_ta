<?php
class M_pendaftaran extends CI_Model
{
    public function listPendaftar()
    {
        return $this->db->get('pendaftaran')->result_array();
    }

    public function listProdi(){
        return $this->db->get('prodi')->result_array();
    }

    public function jumlahpendaftarProdi1($idProdi)
    {
        $result = 0; 
        $this->db->where('id_prodi1', $idProdi);
        $data = $this->db->get('pendaftaran')->result_array();
        if(!empty($data)) {
            $result = count($data);
        }
        return $result;

    } 

    public function jumlahpendaftarProdi2($idProdi)
    {
        $result = 0; 
        $this->db->where('id_prodi2', $idProdi);
        $data = $this->db->get('pendaftaran')->result_array();
        if(!empty($data)) {
            $result = count($data);
        }
        return $result;

    } 

}