<?php
require('inc/function.php');
$title = 'Page Profil';
debug($_GET);
if(!empty($_GET['nom']) && !empty($_GET['prenom'])) {

} else {
  die('404');
}
include('inc/header.php'); ?>

<h1>Profil</h1>
<p>Nom : <?php echo $_GET['nom']; ?></p>
<p>prenom : <?php echo $_GET['prenom']; ?></p>

<?php include('inc/footer.php');
