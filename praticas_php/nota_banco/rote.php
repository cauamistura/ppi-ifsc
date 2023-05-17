<?php

require_once "./controller/NoteController.php";
require_once "./model/Note.php";

$controller = new NoteController();

$id    = $_GET["id"];
$title = $_GET["title"];
$text  = $_GET["text"];

$note = new Note($id, $title, $text);

$controller->insertNote();


?>