<!DOCTYPE html>
<link rel= "icon" href = "img/Imagens/logo2Novo.png">
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>A</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action= "{{route('cadastrarCli')}}" method= "POST">
				@csrf
					<label for="chk" aria-hidden="true">Retrovisor</label>
					<input style= "border-radius: 13px" type="text" name="usuario" placeholder="Nome ou E-mail" required="">
					<input style= "border-radius: 13px" type="password" name="senha" placeholder="Senha" required="">
					<input style= "border-radius: 13px" type="text" name="plano" placeholder="Plano desejado" required="">
					<button>SIGN</button>
				</form>
			</div>
			<div class="login">
				<form method= "POST" href = "{{route('logue')}}">  
					<label for="chk" aria-hidden="true">LOGIN</label>
					<input type="text" name="email" placeholder="Nome ou E-mail">
					<input type="password" name="pswd" placeholder="Senha">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
