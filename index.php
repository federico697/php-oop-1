<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php


include_once __DIR__ . '/classi/movie.php';

$movie1 = new Movie('le cronache di narnia', 2005, 'fantasy', 6, rand(1,10));

echo $movie1->title;
echo "<br>";
echo $movie1->year;
echo "<br>";
echo $movie1->genre;
echo "<br>";
echo $movie1->age;
echo "<br>";
echo $movie1->voto;
echo "<br>";
echo $movie1->consiglioFilm();
echo "<br>";
echo $movie1->perTutti();
echo "<br>";

?>