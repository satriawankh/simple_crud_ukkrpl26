<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Informasi Data Siswa</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">  
    <h2 class="text-center">Selamat Datang, Silahkan Login!</h2>
		<form action="proses_login.php" method="post">
			<label for="username">Username:</label>
			<input type="text" name="username" id="" class="form-control"/> <br><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="" class="form-control"/> <br><br>
			<input type="submit" value="Login" class="btn btn-success">
		</form>
	</div>
</body>
</html>