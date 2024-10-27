<?php
namespace App\Models;


use mysqli;
use mysqli_sql_exception;

class Model {
  protected $conn;
  protected $table;

  public function __construct() {
    $host = 'localhost';
    $db   = 'beasiswa_db';
    $user = 'root';
    $pass = '';


    $this->conn = new mysqli($host, $user, $pass, $db);
    if($this->conn->connect_error) die('Koneksi error karena : '. $this->conn->connect_error);

  }

  public function insert($data) {
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";

    return $this->conn->query($query) or die("Error: " . $this->conn->error);
  }

  public function delete($id) {
    $query = "DELETE FROM {$this->table} WHERE id='{$id}'";

    return $this->conn->query($query) or die("Error: " . $this->conn->error);
  }

  public function all() {
    $query = "SELECT * FROM {$this->table}";
    return $this->conn->query($query);
  }

  public function find($id) {
    $query = "SELECT * FROM {$this->table} WHERE id='{$id}'";
    $result = $this->conn->query($query);
    return $result->fetch_assoc();
  }


  public function update($id, $data) {

    $updates = [];
    foreach($data as $key => $value) {
      $updates[] = "{$key}='{$value}'";
    }
    $updates = implode(", ", $updates);


    $query = "UPDATE {$this->table} SET {$updates} WHERE id='{$id}'";
    return $this->conn->query($query) or die("Error: " . $this->conn->error);
  }

  public function where($column, $value) {
    $query = "SELECT * FROM {$this->table} WHERE {$column}='{$value}'";

    return $this->conn->query($query);
  }
}


