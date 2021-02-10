<?php
require('inc/pdo.php');
require('inc/function.php');

$page = 1;
$offset = 0;
$perPage = 3;

if(!empty($_GET['page'])) {
  $page = $_GET['page'];
  $offset = ($page - 1) * $perPage;
}

$sql = "SELECT * FROM reves ORDER BY created_at DESC LIMIT $perPage OFFSET $offset";
$query = $pdo->prepare($sql);
$query->execute();
$dreams = $query->fetchAll();

// count le nombre total de rêves dans la table reves
$sql = "SELECT COUNT(id) FROM reves";
$query = $pdo->prepare($sql);
$query->execute();
$count = $query->fetchColumn();

include('inc/header.php'); ?>
<div class="wrap">
  <?php pagination($page,$perPage,$count); ?>

  <section id="all_dreams">
    <?php foreach ($dreams as $dream) { ?>
      <div class="dream">
        <p class="author">Author: <?= ucfirst($dream['author']); ?></p>
        <p class="reve"><strong><?= $dream['reve']; ?></strong></p>
        <p class="date">Date: <?php echo date('d/m/Y à h:i',strtotime($dream['created_at'])); ?></p>

        <ul class="ulcenter">
          <li><a href="likes.php?id=<?php echo $dream['id']; ?>">Like (<?= $dream['likes']; ?>)</a></li>
          <li><a href="dislikes.php?id=<?php echo $dream['id']; ?>">Dislike (<?= $dream['dislikes']; ?>)</a></li>
        </ul>

        <ul class="ulcenter">
          <li><a href="vote.php?id=<?php echo $dream['id']; ?>&type=like">like</a></li>
          <li><a href="vote.php?id=<?php echo $dream['id']; ?>&type=dislike">Dislike</a></li>
        </ul>
      </div>
    <?php } ?>
    <div class="clear"></div>
  </section>

  <?php pagination($page,$perPage,$count); ?>
</div>
<?php include('inc/footer.php');
