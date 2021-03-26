<?php

	require('./bibliotecas/PHPMailer/Exception.php');
	require('./bibliotecas/PHPMailer/OAuth.php');
	require('./bibliotecas/PHPMailer/PHPMailer.php');
	require('./bibliotecas/PHPMailer/POP3.php');
	require('./bibliotecas/PHPMailer/SMTP.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	class Mensagem {
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array( 'codigo_status' => null, 'descricao_status' => '');

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function mensagemValida() {
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
				return false;
			}

			return true;
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	//print_r($mensagem);

	if(!$mensagem->mensagemValida()) {
		echo 'Mensagem não é válida';
	}

	$mail = new PHPMailer(true);
	
	try {
	    //Server settings
	    $mail->SMTPDebug = false;                   // Enable verbose debug output
	    $mail->isSMTP();                            // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  			// Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;						// Enable SMTP authentication
	    $mail->Username = 'teste@gmail.com';		// SMTP username
	    $mail->Password = 'password';          		// SMTP password
	    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                          // TCP port to connect to

	    //Recipients
	    $mail->setFrom('teste@gmail.com', 'Nome do remetente');				//Endereço e nome do remetente
	    $mail->addAddress($mensagem->__get('para'));    				 	//Endereço e nome do destinatario
	    //$mail->addReplyTo('info@example.com', 'Information');				//Endereço e nome do receptor da resposta do destinatario
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         			// Add anexos
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    			// Optional name

	    //Content
	    $mail->isHTML(true);                                  				
	    $mail->Subject = $mensagem->__get('assunto');						//Assunto
	    $mail->Body    = $mensagem->__get('mensagem');						//Mensagem com html
	    $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';//Mensagem caso o email não interprete html

	    $mail->send();

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';
		echo 'E-mail enviado com sucesso';

	} catch (Exception $e) {

		$mensagem->status['codigo_status'] = 2;
	    $mensagem->status['descricao_status'] = 'Não foi possível enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
		echo 'Erro! <br> <pre>';
		echo $e;
		echo '</pre>';
	    //alguma lógica que armazene o erro para posterior análise por parte do programador
	}
?>