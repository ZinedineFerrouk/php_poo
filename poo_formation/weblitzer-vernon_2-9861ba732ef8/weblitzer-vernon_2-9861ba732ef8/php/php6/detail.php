<?php
require('inc/data.php');
require('inc/function.php');
$title = 'details du film';
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  $currentFilm = array();
  // ATTENTION ++++ dans la vraie vie ici nous ferions une request à la base de donnée pour aller chercher ce film et uniquement ce film
  foreach ($movies as $key => $movie) {
    if($movie['id'] == $id) {
      $currentFilm = $movie;
      $currentKey = $key;
    }
  }
  if(empty($currentFilm)) {
    die('404');
  }
} else {
  die('404');
}
include('inc/header.php'); ?>
<div class="one_movie">
  <h1><?php echo $currentFilm['title']; ?></h1>
  <p>Année: <?php echo $currentFilm['year']; ?></p>
  <p>directors: <?php echo $currentFilm['directors']; ?></p>
  <p>Note: <?php echo $currentFilm['rating']; ?></p>
  <p>imdb: <?php echo $currentFilm['imdb_id']; ?></p>
  <?php echo imagemovie($currentFilm); ?>
</div>

<?php if($currentKey > 0) {
  $keyprecedente = $currentKey - 1; ?>
  <a href="detail.php?id=<?php echo $movies[$keyprecedente]['id']; ?>">Précédent</a>
<?php } ?>
<?php if($currentKey < count($movies) - 1) {
  $keySuivant = $currentKey + 1; ?>
  <a href="detail.php?id=<?php echo $movies[$keySuivant]['id']; ?>">Suivant</a>
<?php } ?>

<?php include('inc/footer.php');
