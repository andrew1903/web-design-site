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
    <div class="first">
        left side
    </div>

    <div class="container">
        <h4>Table</h4>
        <table>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Rozetka</td>
                <td>+380 91 131 12 12</td>
                <td>Ukraine</td>
            </tr>
        </table>

        <h4>Image</h4>
        <img src="img/products/img_1.png" alt="product">

        <h4>Video</h4>
        <iframe width="420" height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
        </iframe>
    </div>

    <div class="second">
        <p>Сьогоднішня дата: <?php echo date('d/m/Y'); ?></p>
        <p id="time">Поточний час: <?php echo date('H:i:s'); ?></p>
    </div>
</main>

<footer>
    Підвал сайту
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			setInterval(function() {
				$.ajax({
					url: 'time.php',
					success: function(data) {
						$('#time').html("Поточний час: " + data);
					}
				});
			}, 1000);
		});
	</script>

<script src="js/main.js"></script>
</body>
</html>