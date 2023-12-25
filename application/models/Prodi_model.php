<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model{
  public function getAll($search)
  {
    $q = "SELECT * FROM `prodi` WHERE `nama_prodi` LIKE '%$search%'";
    return $this->db->query($q)->result_array();
  }

  public function insert($namaProdi)
  {
    $q = "INSERT INTO `prodi`(`id_prodi`, `nama_prodi`) VALUES (NULL,'$namaProdi')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function searchOrAdd($namaProdi)
  {
    $ada = $this->getAll($namaProdi);
    if(count($ada) <= 0){
      $this->insert($namaProdi);
      $ada = $this->searchOrAdd($namaProdi);
    }
    return $ada[0]["id_prodi"];
  }
}