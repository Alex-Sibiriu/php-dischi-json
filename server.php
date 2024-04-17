<?php

$string = file_get_contents('discs.json');

$list = json_decode($string);

// EVENTUALI MODIFICHE



//

header('Content-Type: application/json');

echo json_encode($list);