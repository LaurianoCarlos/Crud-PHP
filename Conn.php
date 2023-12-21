<?php 
abstract class Conn {
  private string $db = "mysql";
  private string $host = "localhost";
  private string $user = "root";
  private string $pass = "191400";
  private string $dbname = "php";
  private int $port = 3306;
  private object $connect;

  public function connectDB() {
    try {
      $this->connect = new PDO($this->db . ':host=' . $this->host .';port='. $this->port. ';dbname='.$this->dbname,$this->user,$this->pass);
      
      return $this->connect;
    } catch (Exception $exception) {
      echo "Erro: " . $exception;
    }
  }
}
?>

