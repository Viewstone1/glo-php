<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<title>Cut your URL</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.html">Cut your URL</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.html">Главная</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a href="login.html" class="btn btn-primary">Войти</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main class="container">
		<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
			Все ок
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
			А тут не ок
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<div class="row mt-5">
			<div class="col">
				<h2 class="text-center">Регистрация</h2>
				<p class="text-center">Если у вас уже есть логин и пароль, <a href="login.html">войдите на сайт</a></p>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-4 offset-4">
				<form>
					<div class="mb-3">
						<label for="login-input" class="form-label">Логин</label>
						<input type="text" class="form-control is-valid" id="login-input" required>
						<div class="valid-feedback">Все ок</div>
					</div>
					<div class="mb-3">
						<label for="password-input" class="form-label">Пароль</label>
						<input type="password" class="form-control is-invalid" id="password-input" required>
						<div class="invalid-feedback">А тут не ок</div>
					</div>
					<div class="mb-3">
						<label for="password-input2" class="form-label">Пароль еще раз</label>
						<input type="password" class="form-control is-invalid" id="password-input2" required>
						<div class="invalid-feedback">И тут тоже не ок</div>
					</div>
					<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
				</form>
			</div>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>
