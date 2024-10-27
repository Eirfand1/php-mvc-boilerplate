<?php 
namespace App\Models;

class Mahasiswa extends Model {
  public function __construct(){
    parent::__construct();
    $this->table = "mahasiswa";
  }
}
