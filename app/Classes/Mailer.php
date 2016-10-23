<?php

		//namespace App\Classes;

	include("PHPMailer-Master/PHPMailerAutoload.php");

		class Mailer{

		public $bodyMain;

		public function __construct($bodyMain){
			$this->Email($this->$bodyMain = $bodyMain);
		}
		public function Email($body){

			$mail = new \PHPMailer(); 
			$mail->IsSMTP(); 

			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'ssl'; 
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true);
			$mail->Username = "#YourEmail";
			$mail->Password = "#YourPass";
			$mail->SetFrom("main@gmail.com");
			$mail->Subject = "Message From MJBrennan.me";
			$mail->Body = $body;
			$mail->AddAddress("#Add Destination");



			if(!$mail->send()){
				echo('Mail Not Sent'.'<br>'. $mail->ErrorInfo);
			}else{
				echo('Mail Sent');
			}

				
			}

		}


		//$mail = new Mailer($_POST["body"]);

		//echo ($mail);

		$mail = new Mailer("Mailer");