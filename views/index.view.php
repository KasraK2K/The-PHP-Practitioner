<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>The PHP Practitioner</title>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-color: #455a64;
			color: #eeeeee;
		}

		header {
			background: #263238;
			padding: 2rem;
			text-align: center;
			text-shadow: 0 0 3px rgba(0, 0, 0, .25);
		}

		.white {
			color: #ff3d00;
		}
	</style>

</head>

<body>

	<header>
		<h1 class="white"><?= "Hello, Kasra."  ?></h1>
	</header>

	<nav>
		<ul>
			<li><a href="/about.view.php">About page</a></li>
			<li><a href="/contact.view.php">Contact page</a></li>
		</ul>
	</nav>

	<ul>
		<?php foreach ($tasks as $task) : ?>

			<li>

				<?php if ($task->completed) : ?>
					<strike><?= $task->description; ?></strike>
				<?php else : ?>
					<?= $task->description; ?>
				<?php endif; ?>

			</li>

		<?php endforeach; ?>
	</ul>

</body>

</html>