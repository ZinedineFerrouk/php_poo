<?php
require('inc/data.php');
require('inc/function.php');
$title = 'Movies';

//debug($movies);
include('inc/header.php'); ?>

<h1>Mes films à moi !</h1>
<?php foreach ($movies as $movie): ?>
  <div class="film">
    <h2><?php echo $movie['title']; ?></h2>
    <img src="https://www.weblitzer.fr/formation/posters/<?php echo $movie['id']; ?>.jpg" alt="">
    <a href="detail.php?id=<?php echo $movie['id']; ?>">
      <?php echo imagemovie($movie); ?>
    </a>
  </div>
<?php endforeach; ?>

<?php include('inc/footer.php');
