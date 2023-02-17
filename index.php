<?php 
class Movie{
    public $title;
    public $author;


    public function __construct($title , $author){
        $this->title = $title;
        $this->author = $author;
    }

}
$film1 = new Movie ('The truman show' , 'Daniele Tuttolani');
var_dump($film1);