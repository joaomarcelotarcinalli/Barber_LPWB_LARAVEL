<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel= "icon" href = "img/Imagens/logo2Novo.png"><link rel= "icon" href = "img/Imagens/logo2Novo.png">
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
				<form action= "{{route('cadastrar')}}" method= "POST">
                @csrf
					<label for="chk" aria-hidden="true">REGISTRE</label>
					<input style= "border-radius: 13px" type="text" name="usuario" placeholder="Nome ou E-mail" required="">
					<input style= "border-radius: 13px" type="password" name="senha" placeholder="Senha" required="">
					<input style= "border-radius: 13px" type="text" name="plano" placeholder="Plano desejado" required="">
					<button type= "submit">CADASTRAR</button>
				</form>
			</div>
			<div class="login">
				<form>  
					<label for="chk" aria-hidden="true">ENTRE</label>
					<input type="email" name="email" placeholder="Nome ou E-mail">
					<input type="password" name="pswd" placeholder="Senha">
					<button>LOGIN</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
