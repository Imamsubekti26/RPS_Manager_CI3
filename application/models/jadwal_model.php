<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {
  public function getAll($dosen, $filter, $search)
  {
    $search = empty($search) ? '' : "AND `matkul`.`nama_matkul` LIKE '%".$_GET['search']."%'";
    $q = "SELECT `jadwal`.`id_jadwal` AS 'id', `jadwal`.`semester`, `jadwal`.`tahun`, `matkul`.`nama_matkul`, `prodi`.`nama_prodi` FROM `jadwal` JOIN `matkul` USING(`id_matkul`) JOIN `prodi` USING(`id_prodi`) WHERE `jadwal`.`dosen` = '$dosen' AND `status` = $filter $search";
    return $this->db->query($q)->result_array();
  }
 
  public function getOne($id)
  {
    $q = "SELECT `prodi`.`nama_prodi`, `jadwal`.`dosen`, `dosen`.`name`, `jadwal`.`status`, `jadwal`.`tahun`, `jadwal`.`semester`, `jadwal`.`sks_teori`, `jadwal`.`sks_praktek`, `jadwal`.`gambaran_umum`, `jadwal`.`capaian_pembelajaran`, `jadwal`.`prasyarat`, `matkul`.`nama_matkul` FROM `jadwal` JOIN `dosen` ON `dosen`.`nik` = `jadwal`.`dosen` JOIN `matkul` USING(id_matkul) JOIN `prodi`USING(`id_prodi`) WHERE `id_jadwal` = '$id'";
    return $this->db->query($q)->row_array();
  }
 
  public function insert($id_matkul, $id_prodi, $id_dosen, $semester, $sks_teori, $sks_praktek, $tahun)
  {
    $q = "INSERT INTO `jadwal`(`id_jadwal`, `id_matkul`, `id_prodi`, `dosen`, `semester`, `sks_teori`, `sks_praktek`, `tahun`, `status`, `gambaran_umum`, `capaian_pembelajaran`, `prasyarat`) VALUES (NULL,'$id_matkul','$id_prodi','$id_dosen','$semester','$sks_teori','$sks_praktek','$tahun','0','','','')";
    $this->db->query($q);

    return $this->db->affected_rows() > 0;
  }
 
  public function updateBasic($id, $semester, $sks_teori, $sks_praktek, $tahun)
  {
    $q = "UPDATE `jadwal` SET `semester` = '$semester', `sks_teori` = '$sks_teori', `sks_praktek` = '$sks_praktek', `tahun` = '$tahun' WHERE `jadwal`.`id_jadwal` = '$id'";
    $this->db->query($q);

    return $this->db->affected_rows() > 0;
  }
 
  public function updateStatus($id, $status)
  {
    $q = "UPDATE `jadwal` SET `status` = '$status' WHERE `jadwal`.`id_jadwal` = '$id'";
    $this->db->query($q);

    return $this->db->affected_rows() > 0;
  }
 
  public function updateText($id, $section, $data)
  {
    $q = "UPDATE `jadwal` SET `$section` = '$data' WHERE `jadwal`.`id_jadwal` = '$id'";
    $this->db->query($q);

    return $this->db->affected_rows() > 0;
  }
 
  public function delete($id)
  {
    $q = "DELETE FROM `jadwal` WHERE `jadwal`.`id_jadwal` = '$id'";
    $this->db->query($q);

    return $this->db->affected_rows() > 0;
  }
}