<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class ="wrapper">
		<div class = "workspace">
			<div class="create">
			<a href="#popup">+</a>
			</div>
			<div id="popup" class="popup">
				<form action="database.php" method="GET" name="enter_word" class="popupform">
					<input type="text" name="word"	class="word_input">
					<input type="submit"  class="submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>