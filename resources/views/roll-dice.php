<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: <?= $dice_roll; ?></p>
	<p>Guess: <?= $guess; ?></p>
	<?php if ($correct): ?>
		<p>You guessed correctly</p>
	<?php endif ?>
</body>
</html>