<?php

class Movie{
   // attributi
   public $title;
   public $year;
   public $genre;
   public $age;

   public function __construct( $title, $year, $genre, $age )
   {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    $this->age = $age;
   }

   public function perTutti(){
    if($this->age > 18){
        return "la visione è riservata ad un pubblico di soli adulti";
    } else{
        return "la visione è autorizzata";
    }
   }
}

?>