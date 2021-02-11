<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Framework POO</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>

<body>


  <header>
    <nav>
      <ul>
        <li><a href="<?= $view->path('home'); ?>">Home</a></li>
        <li><a href="<?= $view->path('abonnes'); ?>">Voir les abonnés</a></li>
        <li><a href="<?= $view->path('products'); ?>">Voir les produits</a></li>
        <li><a href="<?= $view->path('borrows'); ?>">Voir les emprunts</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <?= $content; ?>
  </div>

  <footer>

  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>

</html>