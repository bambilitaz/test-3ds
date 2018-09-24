<?php
class Video {
 
    public $id;
    public $title;
    public $description;
    public $thumbnails;
    
    public function __construct($id, $title, $description, $thumbnails){
        $this->id           = $id;
        $this->title        = $title;
        $this->description  = $description;
        $this->thumbnails   = $thumbnails;
    }
}
?>