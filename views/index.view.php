<?php require('partials/head.php'); ?>

<header>
	<h1>Home</h1>
</header>

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

<h1>write your name</h1>

<form action="/name" method="POST">
	<input type="text" name="name">
	<button type="submit">submit</button>
</form>
			
			
<?php require('partials/footer.php'); ?>