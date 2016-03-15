<?php
// Check for empty fields
if(empty($_POST['name'])  		||
	empty($_POST['email']) 		||
	empty($_POST['phone']) 		||
	empty($_POST['message'])	||
	!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
	echo "No arguments Provided!";
	return false;
}
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

			if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
			$emailsender='malu@malumaia.com.br'; // E-mail remetente
			}
			else {
			$emailsender ='malu@malumaia.com.br';
			}

			if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
			elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
			else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

			// Passando os dados obtidos pelo formulário para as variáveis abaixo
			$nomeremetente     = "$name";
			$emailremetente    = "malu@malumaia.com.br";
			$emaildestinatario = "malu@malumaia.com.br";//$email
			$comcopia          = "$email_address";
			$comcopiaoculta    = "leandro.balardin@cardban.com.br";
			$assunto           = "Contato - MALU MAIA";
			$mensagem          = "MALU MAIA";

			/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML ='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Contato do Site StarPay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
					<tr>
						<td align="center" bgcolor="#222222" style="padding: 40px 0 30px 0; color: #E7E3E4; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
							<img style="border-radius: 10px;" src="http://starpay.com.br/img/logo.png" style="display: block; " />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 0px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
						</td>
					</tr>
					<tr>
						<td style="padding: 20px 0 30px 0; color: #222222; font-family: Arial, sans-serif; font-size: 14px; line-height: 20px;text-align: center">
							<strong><font color="red"><b>Contato do Site StarPay</b></font></strong><br/>
							Prezado(a) senhor(a) <b>'.$name.'</b>, obrigado por entrar em contato conosco, atraves da mensagem abaixo.<br>
							<table width="100%">
							<thead>
								<tr>
									<th bgcolor="#222222" ><font color="#ffffff">Nome</font></th>
									<th bgcolor="#222222" ><font color="#ffffff">Endere&ccedil;o de Email</font></th>
									<th bgcolor="#222222" ><font color="#ffffff">Fone de Contato</font></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="color: #FF0502; font-family: Arial, sans-serif; font-size: 11px; text-align: center">'.$name.' </td>
									<td style="color: #FF0502; font-family: Arial, sans-serif; font-size: 11px; text-align: center">'.$email_address.'</td>
									<td style="color: #FF0502; font-family: Arial, sans-serif; font-size: 11px; text-align: center">'.$phone.'</td>
								</tr>
							</tbody>
							</table>
							<table width="100%">
							<thead>
								<tr>
									<th bgcolor="#222222"><font color="#ffffff">Mensagem</font></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="color: #FF0502; font-family: Arial, sans-serif; font-size: 11px; text-align: center">'.$message.'</td>
								</tr>
							</tbody>
							</table>
							<br>Sua Mensagem foi entregue com Sucesso!<br> Assim que sua mensagem for processada entraremos em contato.<br><br>
							<a title="CLIQUE AQUI PARA ACESSAR O SITE" href="http://www.starpay.com.br" target="_blank"><button style=" background: #222222; background-image: -webkit-linear-gradient(top, #E7E3E4, #E7E3E4); background-image: -moz-linear-gradient(top, #E7E3E4, #E7E3E4); background-image: -ms-linear-gradient(top, #E7E3E4, #E7E3E4); background-image: -o-linear-gradient(top, #E7E3E4, #E7E3E4); background-image: linear-gradient(to bottom, #FF0502, #FF0502);-webkit-border-radius: 10; -moz-border-radius: 10; border-radius: 10px; font-family: Arial; color: #ffffff; font-size: 17px; padding: 10px 20px 10px 20px; text-decoration: none;"><b>ACESSAR O SITE</b></button></a>
						</td>
					</tr>
							</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 20px 30px 5px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td style="color: #222222; font-family: Arial, sans-serif; font-size: 11px; text-align: center">
							<strong><font color="red">Aten&ccedil;&atilde;o!</font></strong><br/>
							<p>Em caso de duvidas favor entrar em contato pelo numero abaixo ou pelo nosso endere&ccedil;o de Email</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<table style="display: inline-block" >
					<tr>
						<td style="color: #222222; font-family: Arial, sans-serif; font-size: 13px; text-align: center">
							<center><img src="http://starpay.com.br/img/mail/icon-fone20x20.png" style="display: block;" /> (55 21) 4063-3100 - <i>S&atilde;o Paulo - SP</i></img></center>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<table style="display: inline-block" >
					<tr>
						<td style="color: #222222; font-family: Arial, sans-serif; font-size: 13px; text-align: center">
							<center><img src="http://starpay.com.br/img/mail/icon-mail20x20.png" style="display: block;" /> <i>contato@starpay.com.br</i></img></center>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 20px 30px 50px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td style="color: gray; font-family: Arial, sans-serif; font-size: 11px; text-align: center">
							<strong  style="color:#222222"><br/>Equipe StarPay Tecnologia</strong><br/>
							Para mais informa&ccedil;&otilde;es acesse: </br>http://www.starpay.com.br<br/>
							Esta &eacute; uma mensagem autom&aacute;tica, por favor n&atilde;o responda!
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#222222" style="padding: 30px 30px 30px 30px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center" style="color: #FF0502; font-family: Arial, sans-serif; font-size: 11px;" width="75%">
							<center>StarPay &reg; Todos os direitos reservados - 2015</center><br/>
						</td>
					</tr>
				</table>
			</td>
		</tr>
				</table>
	</table>
</body>
</html>
';
			/* Montando o cabeçalho da mensagem */
			$headers = "MIME-Version: 1.1".$quebra_linha;
			$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
			// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
			$headers .= "From: ".$emailsender.$quebra_linha;
			$headers .= "Return-Path: " . $emailsender . $quebra_linha;
			// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
			// Se não houver um valor, o item não deverá ser especificado.
			if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
			if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
			$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
			// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
			/* Enviando a mensagem */
			mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);
?>