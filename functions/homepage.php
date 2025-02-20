<?php

echo "this is homepage";
$db = include 'database/start.php';

$posts = $db->getAll('posts');

include 'index.view.php';