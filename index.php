<?php

/* Esercizio da svolgere

Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 */




$censored=$_GET['censored'];


$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta quisquam error odio id nemo! Sequi iusto quidem ducimus cumque non quos. Tempora temporibus modi, ipsum aliquam doloremque culpa cumque nisi?';
$lenghtText=strlen($text);
$textCensored=str_replace($censored, '(***)', $text);
$lenghtCensored=strlen($textCensored);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>PHP Badwords</title>
</head>
<body>

<header>
  <div class="container d-flex justify-content-center align-items-center">
  <h1>PHP Badwords</h1>
  </div>
  
</header>

<main>

<section class="text-normal">

<div class="container">
<h2>
    Testo Non Censurato
  </h2>

  <p>
    <?php echo $text; ?>
  </p>

  <p>
    Lunghezza testo: <span><?php echo $lenghtText; ?></span>
  </p>
</div>
</section>


<section class="text-censored">
<div class="container">
<h2>Testo censurato</h2>

<p><?php echo $textCensored ?></p>
<p>Lunghezza Testo: <span><?php echo $lenghtCensored ?></span></p>
</div>

</section>


</main>


<footer></footer>

  
</body>
</html>