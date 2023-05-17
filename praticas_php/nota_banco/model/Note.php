<?php
class Note {
    private $id, $title, $text;

    public function __construct($id, $title, $text) {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }
}
?>