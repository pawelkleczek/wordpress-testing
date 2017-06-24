<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<?php echo the_content(); ?>

	<?php endwhile; ?>
	// Nawigacja
	<?php else : ?>
	// Zawartość strony błędu
	<?php endif; ?>
	</body>
</html>
