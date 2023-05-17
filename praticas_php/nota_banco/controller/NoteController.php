<?php
require_once '../model/Note.php';
require_once '../model/NoteDAO.php';

class NoteController {

    private $noteDAO = null;

    function __construct(){
        $noteDAO = new NoteDAO();
    }

    public function insertNote($note) {
        $noteDAO->insert($note);
    }
}
?>