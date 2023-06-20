<?php 

abstract class Conn {
  public string $db = "mysql";
  public string $host = "localhost";
  public string $user = "root";
  public string $pass = "191400";
  public string $dbname = "php";
  public int $port = 3306;
  public object $connect;

  public function connectDB() {
    try {
      $this->connect = new PDO($this->db . ':host=' . $this->host .';port='. $this->port. ';dbname='.$this->dbname,$this->user,$this->pass);
      return $this->connect;
    } catch (Exception $err) {
      echo "Erro: " . $err;
    }
  }
}
?>

