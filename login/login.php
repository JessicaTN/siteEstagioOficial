<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">

    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link href="../css/css.css" rel="stylesheet" />
    </head>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <body id="tudo">
        <center id="form"><h1>Login</h1>
        <form method="POST" action="login_ok.php" onsubmit="return funcao(this)">
            Email: <input type="email" name="email" placeholder="Digite o seu usuário" /><br>
            Senha: <input type="password" name="senha" placeholder="Digite a sua senha" /><br>
			<div class="g-recaptcha" data-sitekey="6Lfm7cUUAAAAABwN56DU-X3WQoXcA8026frQyZ0f"></div>
          
			<input type="submit"/>
        </form><br>
		</center>
		<script>
			
		function funcao(a){
			 var response = grecaptcha.getResponse();
			if	(response.length == 0){
					alert("Não Verificado");
					return false;
					event.preventDefault();
			}
			else{
				return true;
			}
		}
		
		
		</script>
    </body>
</html>