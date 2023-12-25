<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_model extends CI_Model {
  public function getAll($id_jadwal)
  {
    $q = "SELECT * FROM `referensi_pembelajaran` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `id_ref` DESC";
    return $this->db->query($q)->result_array();
  }

  public function insert($id_jadwal, $deskripsi)
  {
    $q = "INSERT INTO `referensi_pembelajaran`(`id_ref`, `id_jadwal`, `deskripsi`) VALUES (NULL,'$id_jadwal','$deskripsi')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function delete($id_ref)
  {
    $q = "DELETE FROM `referensi_pembelajaran` WHERE `id_ref` = '$id_ref'";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }
}