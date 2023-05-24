<?php

//create database web;
//use web 
//create table usuario (
// id int primary key auto_increment,
// email varchar(50),
// psw varchar(20),
// nome varchar(50)
// );

function connectBD(){
    $con = new PDO("mysql:host=localhost;dbname=web", "root", "aluno");
    return $con;
}

function insertUser($nome,$email,$senha){
    try {
        $con = connectBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE);
        $sql = "INSERT INTO usuario (nome,email,psw) VALUES (?,?,?)";
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $nome);
        $stm->bindParam(2, $email);
        $stm->bindParam(3, $senha);
        $stm->execute();
      } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
      }
}

function deleteUser($id){
    try {
        $con = connectBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE);
        $sql = "delete usuario where id = ?";
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
      } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
      }
}

function getUser($id){
  try {
      $con = connectBD();
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE);
      $sql = "select * from usuario where id = ?";
      $stm = $con->prepare($sql);
      $stm->bindParam(1, $id);

      $stm->execute();
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
}


?>