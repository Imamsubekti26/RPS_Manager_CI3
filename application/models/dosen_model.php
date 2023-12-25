<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {
  public function getOne($nik, $pass)
  {
    $q = "SELECT `nik`, `name` FROM `dosen` WHERE `nik` = '$nik' AND `pass` = '$pass' LIMIT 1";
    return $this->db->query($q)->row_array();
  }

  public function insert($nik, $pass, $name)
  {
    $q = "INSERT INTO `dosen`(`nik`, `name`, `pass`) VALUES ('$nik','$name', '$pass')";
    $this->db->query($q);
    return $this->db->affected_rows();
  }
}