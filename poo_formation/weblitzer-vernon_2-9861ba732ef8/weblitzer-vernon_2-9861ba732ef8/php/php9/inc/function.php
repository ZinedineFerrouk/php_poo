<?php

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function validText($errors,$data,$key,$min = 3, $max = 60)
{
  if(!empty($data)) {
    if(mb_strlen($data) < $min) {
      $errors[$key] = 'Min '.$min.' caractères';
    }elseif(mb_strlen($data) > $max) {
      $errors[$key] = 'Max '.$max.' caractères';
    }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}

function pagination($page,$perPage,$count)
{ ?>
  <ul class="pagination ulcenter">
    <?php if($page > 1) { ?>
      <li><a href="index.php?page=<?php echo $page - 1; ?>">Précédent</a></li>
    <?php }
    if($page * $perPage < $count) { ?>
      <li><a href="index.php?page=<?php echo $page + 1; ?>">Suivant</a></li>
    <?php } ?>
  </ul>
<?php }
