<?php

class Movie{
   // attributi
   public $title;
   public $year;
   public $genre;
   public $age;
   public $voto;

   public function __construct( $title, $year, $genre, $age, $voto )
   {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    $this->age = $age;
    $this->voto = $voto;
   }

   public function perTutti(){
    if($this->age > 18){
        return "la visione è riservata ad un pubblico di soli adulti";
    } else{
        return "la visione è autorizzata";
    }
   }

   public function consiglioFilm(){
    if($this->voto < 6){
        return "il film fa schifo";
    } else if($this->voto >= 6 && $this->voto < 8){
        return "è un buon film";
    }else{
        return "è un film da oscar";
    }
   }
}

?>