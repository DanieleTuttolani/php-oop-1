<?php 
class Movie{
    public $title;
    public $author;
    public $genre;


    public function __construct($title , $author , $genre){
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
    }
    public function print_genre_title(){
    echo $this->title . ' ' . $this->genre;

    }

}
$film1 = new Movie ('The truman show' , 'Daniele Tuttolani', 'Drama');
$film2 = new Movie ('La vendetta agricola' , 'Daniele Tuttolani', 'Action');
$film3 = new Movie ('Come diventare esperti a suonare l\'armonica' , 'Daniele Tuttolani', 'Romantic');

$film3 ->print_genre_title();
$film2 ->print_genre_title();
$film1 ->print_genre_title();