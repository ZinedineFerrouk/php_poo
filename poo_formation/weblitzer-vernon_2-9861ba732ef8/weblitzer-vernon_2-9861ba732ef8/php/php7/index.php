<?php
require('inc/function.php');
// traitement du formulaire
debug($_POST);
$errors = array();
$success = false;
// formulaire est soumis
if(!empty($_POST['submitted'])) {
  // Faille XSS
  $nom     = trim(strip_tags($_POST['nom']));
  $prenom  = trim(strip_tags($_POST['prenom']));
  $message = trim(strip_tags($_POST['message']));
  $mail    = trim(strip_tags($_POST['mail']));
  $couleur = trim(strip_tags($_POST['couleur']));
  /////////////////////////
  // Validation
  /////////////////////////
  $errors = validText($errors,$nom,'nom',3,50);
  $errors = validText($errors,$prenom,'prenom',3,60);
  $errors = validText($errors,$message,'message',10,500);
  $errors = validText($errors,$couleur,'couleur',2,20);
  $errors = validEmail($errors,$mail,'mail');
  // if no errors
  if(count($errors) == 0) {
    // send email , insert into
    $success = true;
  }
}
include('inc/header.php'); ?>
  <div class="wrap">
    <?php if($success) { ?>
      <p class="success">Bravo</p>
    <?php } else { ?>
      <form action="" method="post" novalidate>
        <!-- NOM* -->
        <label for="nom">Nom *</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
        <span class="error"><?php if(!empty($errors['nom'])) { echo $errors['nom']; } ?></span>
        <!-- PRENOM* => input type="text" min 3 max 60 -->
        <label for="prenom">Prenom *</label>
        <input type="text" id="prenom" name="prenom" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
        <span class="error"><?php if(!empty($errors['prenom'])) { echo $errors['prenom']; } ?></span>
        <!-- Message* => textarea  min 10 max 500 -->
        <label for="message">Message *</label>
        <textarea name="message"><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
        <span class="error"><?php if(!empty($errors['message'])) { echo $errors['message']; } ?></span>
        <!-- >E-mail* => email valide -->
        <label for="mail">E-mail *</label>
        <input type="email" id="mail" name="mail" value="<?php if(!empty($_POST['mail'])) { echo $_POST['mail']; } ?>">
        <span class="error"><?php if(!empty($errors['mail'])) { echo $errors['mail']; } ?></span>

        <?php
        $colors = array(
          'blue'   => 'Bleu',
          'yellow' => 'Jaune',
          'red'    => 'Rouge'
        );
         ?>
        <label for="mail">Couleur *</label>
        <select name="couleur">
          <option value="">__ selectionnez __</option>
          <?php foreach ($colors as $key => $value): ?>
            <option value="<?php echo $key; ?>" <?php if(!empty($_POST['couleur'])) { if($_POST['couleur'] == $key) {echo 'selected="selected"';}} ?>><?php echo $value; ?></option>
          <?php endforeach; ?>
        </select>
        <span class="error"><?php if(!empty($errors['couleur'])) { echo $errors['couleur']; } ?></span>

        <input type="submit" name="submitted" value="Envoyer">
      </form>
    <?php } ?>
  </div>
<?php include('inc/footer.php');
