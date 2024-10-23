<?php

namespace App\Models;

use mysqli;
use mysqli_sql_exception;

class Model
{
    public $conn;
    protected $table;
    
    public function __construct()
    {
        $host = 'localhost';
        $db   = 'db_name';
        $user = 'root';
        $pass = '';
        
        $this->conn = new mysqli($host, $user, $pass, $db);
        if($this->conn->connect_error) die('Koneksi error karena :'. $this->conn->connect_error); 
    }

    public function insert($data){
        $this->conn->query("INSERT INTO ".$this->table) or die("Error: ". $this->conn->error);
    }

    public function delete($id){
        $this->conn->query("DELETE FROM ".$this->table. "WHERE id=".$id) or die("Error: ". $this->conn->error);
    }

    public function show(){
        $query = $this->conn->query("SELECT * FROM ".$this->table);
        return $query;
    }
}