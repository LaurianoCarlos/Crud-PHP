<?php
require './Conn.php';

class User extends Conn
{
  public $conn = null;
  public array $formData = [];
  public int $id;

  public function lista(): array
  {
    $this->conn = $this->connectDB();
    $querey_users = "SELECT id,nome,email FROM users ORDER BY id DESC LIMIT 40";
    $result_users = $this->conn->prepare($querey_users);
    $result_users->execute();
    $retorno =  $result_users->fetchAll();
    return $retorno;
  }

  public function create(): bool
  {

    //var_dump($this->formData);
    $this->conn = $this->connectDB();
    $query_user = "INSERT INTO users (nome,email,created) VALUES (:nome,:email, now())";
    $add_user = $this->conn->prepare($query_user);
    $add_user->bindParam(':nome', $this->formData['nome']);
    $add_user->bindParam(':email', $this->formData['email']);
    $add_user->execute();

    if ($add_user->rowCount()) {

      return true;
    } else {

      return false;
    }
  }
  public function view()
  {
    $this->conn = $this->connectDB();
    $query_user = "SELECT id, nome, email, created, modified 
                 FROM users
                 WHERE id = :id
                 LIMIT 1";
    $result_user = $this->conn->prepare($query_user);
    $result_user->bindParam(':id', $this->id);
    $result_user->execute();
    $value = $result_user->fetch();

    return $value;
  }

  public function edit(): bool
{
    $this->conn = $this->connectDB();
    $query_user = "UPDATE users 
        SET nome=:nome,
            email=:email,
            modified=NOW()
        WHERE id=:id";

    $editUser = $this->conn->prepare($query_user);
    $editUser->bindParam(':nome', $_POST['nome']);
    $editUser->bindParam(':email', $_POST['email']);
    $editUser->bindParam(':id', $_POST['id']);
    $editUser->execute();

    if ($editUser->rowCount()) {
        return true;
    } else {
        return false;
    }
}

public function delete()
{
 
  var_dump($this->id);
  $this->conn = $this->connectDB();
  $query_user = "DELETE FROM users WHERE id =:id LIMIT 1";
  $delete_user = $this->conn->prepare($query_user);
  $delete_user->bindParam(':id', $this->id);
  $value = $delete_user->execute();

  return $value;

  
}

}
