<?php

require_once './Note.php';

class NoteDAO {
    
    private $pdo = null;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=diario', 'root', 'aluno');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec("set names utf8");
    }

    public function insertData($note) {
        try {
            $sql = 'INSERT INTO `diario`.`mensagem` (`id`, `title`, `texto`) VALUES (:id, :title, :txt);';
            $stm = $this->pdo->prepare($sql);
            $stm->bindValue(":id", $note->getId());
            $stm->bindValue(":title", $note->getTitle());
            $stm->bindValue(":txt", $note->getText());
            $stm->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
            return false;
        }
    }
}

?>