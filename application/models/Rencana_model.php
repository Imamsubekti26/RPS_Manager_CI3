<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rencana_model extends CI_Model{

  public function getAll($id_jadwal)
  {
    $q = "SELECT * FROM `rencana_pembelajaran` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `pertemuan_ke`";
    return $this->db->query($q)->result_array();
  }

  public function getOne($id_rencana)
  {
    $q = "SELECT * FROM `rencana_pembelajaran` WHERE `id_rencana` = '$id_rencana'";
    return $this->db->query($q)->row_array();
  }
  
  public function insert($id_jadwal, $pertemuan_ke, $kemampuan, $indikator, $topik_subtopik, $strategi, $lama_waktu, $penilaian)
  {
    $q = "INSERT INTO `rencana_pembelajaran`(`id_rencana`, `id_jadwal`, `pertemuan_ke`, `kemampuan`, `indikator`, `topik_subtopik`, `strategi`, `lama_waktu`, `penilaian`) VALUES (NULL,'$id_jadwal','$pertemuan_ke','$kemampuan','$indikator','$topik_subtopik','$strategi','$lama_waktu','$penilaian')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function update($id_rencana, $id_jadwal, $pertemuan_ke, $kemampuan, $indikator, $topik_subtopik, $strategi, $lama_waktu, $penilaian)
  {
    $q = "UPDATE `rencana_pembelajaran` SET `id_jadwal`='$id_jadwal',`pertemuan_ke`='$pertemuan_ke',`kemampuan`='$kemampuan',`indikator`='$indikator',`topik_subtopik`='$topik_subtopik',`strategi`='$strategi',`lama_waktu`='$lama_waktu',`penilaian`='$penilaian' WHERE `rencana_pembelajaran`.`id_rencana` = $id_rencana";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function delete($id_rencana)
  {
    $q = "DELETE FROM `rencana_pembelajaran` WHERE `id_rencana` = '$id_rencana'";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

}