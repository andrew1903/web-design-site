<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prac_02_11</title>
<!--        <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/web/web-design/">Products</a></li>
                <li>About</li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main">

    <div class="container">
        <h1>Відгуки</h1>

        <?php include('comments_list.php'); ?>

        <h2>Додати відгук</h2>

        <form method="post" action="add_comment.php">
        	<label for="comment">Ваш відгук:</label><br>
        	<textarea id="comment" name="comment"></textarea><br>
        	<input type="submit" value="Додати відгук">
        </form>
    </div>

</main>

<script src="js/main.js"></script>
</body>
</html>
