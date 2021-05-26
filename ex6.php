<html>
<head>
  <title>Página Contato</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <style type="text/css">
  input,textarea, button{
    margin: 10px 0 0px 0;
  }
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
</head>
<body>
	<div class="container" style="margin-top: 50px;"><h2>Bootstrap 4.0</h2>
    <div class="row">
      <div class="col-sm-6">
                       <form action="enviaContato.php" method="post">
                       <div class="row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa" required="" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required="" />
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-sm-6">
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required="" />
                      </div>
                      <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required="" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <textarea class="form-control" name="mensagem" id="mensagem" placeholder="mensagem" required="" >    </textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                      </div>
                    </div>
                  </form>
  </div>
  <div class="col-sm-6">
    <h5>Telefone</h5>
    71 99969-7820
    <hr>
    <h5>E-mail</h5>
    jonnasnogueira2@gmail.com
    <hr>
    <button class="btn btn-dark">Ver Mapa</button>
  </div>
</div>
</div>
</body>

<?php
$site= "www.suaurl.com.br";
$nomeEmpresa = "Sua Empresa";
$telefoneEmpresa = "Seu Telefone";
$urlLogo = "http://tosempreai.com.br/wp-content/uploads/2017/06/tosempreai.png";

$empresa = $_POST["empresa"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$texto = "<h3> Formulário </h3><br>
			<b>Empresa:</b> $empresa<br>
			<b>Nome do Cliente:</b> $nome<br>
			<b>Telefone:</b> $telefone<br>
			<b>E-mail:</b> $email<br>
			<b>Mensagem:</b> $mensagem<br>";

$emailDestino = "jonnasnogueira2@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:" . $email . "\r\n";

mail($emailDestino, 'Teste de E-mail', $texto, $headers);

$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From:" . $emailDestino . " \r\n";
$texto .= "Seu e-mail foi recebido por um de nossos atendentes<br>
			Em breve será respondido!<br>
			<br>
			Departamento Comercial ".$empresa."<br>
			".$site."<br>
			".$telefoneEmpresa."<br>
			<br>
			<img src='".$urlLogo."'>";

mail($email, 'RE: Teste de E-mail', $texto, $headers2);

print '<script>location.href= "contato.php";</script>';

?>