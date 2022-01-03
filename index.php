<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mon super premier site</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php
      function debug($toDebug, $stop = false)
      {
        echo '<pre>';
        var_dump($toDebug);
        echo '</pre>';
        if($stop){
          die();
        }
      }

      function makeHTML($text = 'Aucun texte', $balise = 'p') 
      {
        echo "<$balise>$text</$balise>";
      }

      makeHTML("Salut à tous !", 'h1');
      makeHTML("Je m'appelle Alexandre Quilan-Delaistre", 'h2');
      makeHTML("Je suis un super développeur !", 'h3');
      makeHTML("Aujourd'hui j'ai appris à differencier les types de variables en PHP, les boucles et les structures conditionnelles. Wouah, ce fut un sacré travail !");
      makeHTML("Le plus dur a surement été de comprendre la déclaration et l'utilisation des fonctions et méthodes en PHP, quel malheur");
    ?>
    <script src="js/scripts.js"></script>
</body>
</html>