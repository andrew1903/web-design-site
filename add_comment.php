<?php
$comment = $_POST['comment'];
$file = 'comments.txt';

$current = file_get_contents($file);
$current .= $comment . ", " . date('H:i:s') . ", " . date('d/m/Y') . "\n";
file_put_contents($file, $current);

header('Location: feedback.php');
?>