<?php
    $file = 'comments.txt';

    if(file_exists($file)) {
        $comments = file($file);
        foreach($comments as $comment) {
        	echo "<p>$comment</p>";
        }
    } else {
        echo "<p>На даний момент відгуків немає.</p>";
    }
?>