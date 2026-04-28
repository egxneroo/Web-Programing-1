<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
	body{
		 font-family:Arial, Helvetica, sans-serif;
		 background-color: "whitesmoke";
	}
	</style>
</head>
<body>
	<h1>Welcome</h1>
    <form method="POST" action="get_data.php">
		<input type="text" name="input1" placeholder="inputan" value="Ega"/>
		<input type="email" name="input2" placeholder="email" value="egarisqi440@gmail.com"/>
		<input type="password" name="input3" placeholder="password" value="123456789"/>
		<input type="date" name="input4"/>
		<input type="submit">simpan</input>
		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
			<textarea></textarea>
		</div>

	</form>
</body>
</html>