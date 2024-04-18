<?php

  $string = file_get_contents('discs.json');

  $list = json_decode($string, true);

  $disc = $list[$_GET['index']];

?>

<?php require_once __DIR__ . '/partials/head.php'; ?>

<body>

  <header>
    <div class="container h-100 d-flex align-items-center">
      <i class="fa-brands fa-spotify"></i>
      <a href="index.php" class="text-white fw-bold ms-5 px-3">Home</a>
    </div>
  </header>

  <main>
    <div class="container text-white">
      <div class="top-details d-flex justify-content-between pt-4">
        <?php if($disc['poster']):?>
          <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
        <?php else: ?>
        <img src="https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=" alt="<?php echo $disc['title'] ?>">
        <?php endif; ?>

        <div class="ps-4 text-center">
          <h2 class="py-2">Titolo: <?php echo $disc['title'] ?></h2>
          <?php if($disc['author']):?><h4 class="py-2">Artista: <?php echo $disc['author']?></h4><?php endif; ?>
          <?php if($disc['year']):?><p class="py-2"><strong>Anno: </strong><?php echo $disc['year'] ?></p><?php endif; ?>
          <?php if($disc['genre']):?><p class="py-2"><strong>Genere: </strong><?php echo $disc['genre'] ?></p><?php endif; ?>
        </div>

        <?php if($disc['songs'] != [''] ):?>
        <div class="ps-4 text-center">
          <h3 class="py-2">Brani:</h3>
          <ul class="list-unstyled">
            <?php foreach($disc['songs'] as $song): ?>
            <li class="mb-2 border-bottom border-white"><?php echo $song ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>

      <?php if($disc['description']):?>
      <div class="pt-5">
        <h3>Descrizione</h3>
        <p><?php echo $disc['description'] ?></p>
      </div>
      <?php endif; ?>

    </div>
  </main>

</body>
</html>