<?php

$string = file_get_contents('discs.json');

$list = json_decode($string, true);

// EVENTUALI MODIFICHE

if (isset($_POST['newTitle']) && strlen($_POST['newTitle']) > 0 ) {
  $new_disc = [
    'id' => count($list),
    'title' => $_POST['newTitle'],
    'author' => $_POST['newAuthor'],
    'year' => $_POST['newYear'],
    'poster' => $_POST['newPoster'],
    'genre' => $_POST['newGenre'],
    'description' => $_POST['newDescription'],
    'songs' => []
  ];
  array_unshift($list, $new_disc);
  file_put_contents('discs.json', json_encode($list));
}

if (isset($_POST['indexToRemove'])) {
  $indexToRemove = $_POST['indexToRemove'];
  array_splice($list, $indexToRemove, 1);
  file_put_contents('discs.json', json_encode($list));
}

if (isset($_POST['likeIndex'])) {
  $indexToToggle = $_POST['likeIndex'];
  $list[$indexToToggle]['like'] = !$list[$indexToToggle]['like'];
  file_put_contents('discs.json', json_encode($list));
}

//

header('Content-Type: application/json');

echo json_encode($list);