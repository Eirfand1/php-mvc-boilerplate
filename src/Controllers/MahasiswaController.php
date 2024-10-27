<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
  private $table;

  public function __construct(){
    $this->table = new Mahasiswa();
  }

  public function index(){
    $data = $this->table->all();
    return $this->render(
      '/admin/mahasiswa/index',
      ['mhs'=> $data]
    );
  }

  public function store(){
    $result = $this->table->insert($_POST);

    if($result){
      return $this->render('/admin/mahasiswa/insert',['']); 
    }
    return "
      echo <script> alert('gagal cok')</script> 
    ";
  }

  public function delete($id){
    $result = $this->table->delete($id);
    return $this->render('/admin/mahasiswa/delete', ['']);
  }

  public function editshow($id){
    $result = $this->table->find($id);

    return $this->render(
      '/admin/mahasiswa/edit',
      ['data'=> $result]
    );
  }

  public function edit($id){
    $result = $this->table->update($id, $_POST);
    if($result){
      $this->render('/admin/mahasiswa/editSuccess', ['']);
    }
  }
}



