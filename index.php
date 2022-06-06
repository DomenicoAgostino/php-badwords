<?php

/* Esercizio da svolgere

Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 */


$testo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta quisquam error odio id nemo! Sequi iusto quidem ducimus cumque non quos. Tempora temporibus modi, ipsum aliquam doloremque culpa cumque nisi?'

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

<header>
  <h1>PHP Badwords</h1>
</header>

<main>

<section class="text-normal">
  <h2>
    Testo Non Censurato
  </h2>
</section>


<section class="text-censored">
  <h2>Testo censurato</h2>
</section>


</main>


<footer></footer>
<h2>Testo Non censurato</h2>
  
</body>
</html>