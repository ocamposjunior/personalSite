<?php

	if(isset($_POST['email']) && !empty($_POST['email'])){

		$nome= addslashes($_POST['nome']);
		$email= addslashes($_POST['email']);
		$mensagem= addslashes($_POST['mensagem']);
		$assunto= addslashes($_POST['assunto']);

		$to = "ocamposjunior@hotmail.com";
		$assuntoEmail= "Contato - Feito pelo site";
		$corpo = "Nome :".$nome. "\r\n".
				 "Email:".$email."\r\n".
				 "Assunto:".$assunto."\r\n".
				 "Mensagem:".$mensagem;

		$header = "From:orlandotag@hotmail.com"."\r\n".
		           "Reply-To:".$email."\r\n".
		           "X=Mailer:PHP/".phpversion();

		if (mail($to, $assuntoEmail, $corpo, $header)) {

			echo ("Mensagem enviada com sucesso. Obrigado pelo seu contato");
			
		} else {
			echo ("A mensagem não pode ser enviada.");
		}

    }


 ?>