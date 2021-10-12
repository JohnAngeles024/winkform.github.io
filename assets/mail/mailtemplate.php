<?php
	// for checkbox data to be sent on email		
	if (isset($_POST['check1'])) {
		$check1 ='------------<br>
		ヨコ１／４ページ <br>
		●New Shop <br>
		人気コーナー内の広告枠。 <br>
		枠数限定 <br>
		価格（消費税別） <br>
		72,000円 <br>
		デザイン制作費 <br>
		20,000円～ <br>
		H61 x w185mm <br>
		';
	}

	if (isset($_POST['check2'])) {
		$check2 ='------------<br>
		ヨコ１／４ページ<br>
		●ランチ<br>
		働く男女や主婦の注目度高！<br>
		枠数限定<br>
		価格（消費税別）<br>
		72,000円<br>
		デザイン制作費<br>
		20,000円～<br>
		H61 x w185mm<br>
		';
	}

	if (isset($_POST['check3'])) {
		$check3 ='------------<br>
		ヨコ１／４ページ<br>
		●SHOPR<br>
		街の旬情報を紹介するコーナーに。<br>
		枠数限定<br>
		価格（消費税別）<br>
		60,000円<br>
		デザイン制作費<br>
		20,000円～<br>
		H54 x w185mm<br>
		';
	}
	if (isset($_POST['check4'])) {
		$check4 ='------------<br>
		ヨコ１／２ページ<br>
		価格（消費税別）<br>
		120,000円<br>
		デザイン制作費<br>
		30,000円～<br>
		ヨコ１／２ページ広告<br>
		H116 x w185mm<br>
		';
	}
	if (isset($_POST['check5'])) {
		$check5 ='------------<br>
		１ページ<br>
		価格（消費税別）<br>
		220,000円<br>
		デザイン制作費<br>
		40,000円～<br>
		H257 x w210mm<br>
		';
	}
	if (isset($_POST['check6'])) {
		$check6 ='------------<br>
		２ページ<br>
		価格（消費税別）<br>
		400,000円<br>
		デザイン制作費<br>
		55,000円～<br>
		H257 x w420mm<br>
		';
	}
	if (isset($_POST['check7'])) {
		$check7 ='------------<br>
		表３（裏表紙の裏）<br>
		人気コーナーの対向！<br>
		※変更の場合もあり。<br>
		枠数限定<br>
		価格（消費税別）<br>
		260,000円<br>
		デザイン制作費<br>
		40,000円～<br>
		H257 x w210mm<br>
		';
	}
	if (isset($_POST['check8'])) {
		$check8 ='------------<br>
		表２（表紙の裏）<br>
		表紙をめくってすぐの広告枠。<br>
		枠数限定<br>
		価格（消費税別）<br>
		280,000円<br>
		デザイン制作費<br>
		40,000円～<br>
		1ページ広告<br>
		H257 x w210mm<br>
		';
	}
	if (isset($_POST['check9'])) {
		$check9 ='------------<br>
		表４（裏表紙）<br>
		最も読者の目に留まり、目立つ広告枠。<br>
		枠数限定<br>
		価格（消費税別）<br>
		350,000円<br>
		デザイン制作費<br>
		40,000円～<br>
		H240 x w200mm<br>
		';
	}
	
	if (isset($_POST['check1_01'])) {
		$check1_01 ='------------<br>
		１／２ページ<br>
		価格（消費税別）<br>
		90,000円<br>
		写真点数<br>
		4点<br>
		';
	}
	if (isset($_POST['check1_02'])) {
		$check1_02 ='------------<br>
		１／４ページ<br>
		価格（消費税別）<br>
		55,000円<br>
		写真点数<br>
		1点<br>
		';
	}
	if (isset($_POST['check1_03'])) {
		$check1_03 ='------------<br>
		１ページ<br>
		価格（消費税別）<br>
		170,000円<br>
		写真点数<br>
		6点<br>
		';
	}
				
	
	$comp = $_POST['comp'];
	$fromname = $_POST['fromname'];
	$add = $_POST['add'];
	$tel = $_POST['tel'];

	if (isset($_POST["submit"])) {
		
		require 'class.phpmailer.php';
		require 'class.smtp.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();       
		$mail->Host = 'smtp.gmail.com';  
		$mail->Port = '587';       
		$mail->SMTPAuth = true;      
		$mail->Username = 'bluesolutiondummy101@gmail.com';   
		$mail->Password = 'bluesolutiondummypass';
		$mail->SMTPSecure = 'tls';
		$mail->From = 'bluesolutiondummy101@gmail.com';
		$mail->FromName = $fromname;   
		$mail->AddAddress('bluesolutiondummy102@gmail.com');
		$mail->AddCC($fromname); 
		$mail->WordWrap = 150;       
		$mail->IsHTML(true);       
		$mail->Subject ="Inquiry Details";   
		$mail->Body = "<!DOCTYPE html>
					  <html>
					  <body>
					  <p style='color:black; font-size:25px; text-align:center;'>User Inquiry Details</p>
					  <div>
					  <p style='color:black;'>$check1</p>
					  <p style='color:black;'>$check2</p>
					  <p style='color:black;'>$check3</p>
					  <p style='color:black;'>$check4</p>
					  <p style='color:black;'>$check5</p>
					  <p style='color:black;'>$check6</p>
					  <p style='color:black;'>$check7</p>
					  <p style='color:black;'>$check8</p>
					  <p style='color:black;'>$check9</p>
					  <br>
					  ------------
					  <p style='color:black;'>$check1_01</p>
					  <p style='color:black;'>$check1_02</p>
					  <p style='color:black;'>$check1_03</p>
					  <h2 style='color:#003B71; font-size:20px;'>貴社名・貴店名: <span style='color:black; font-size:15px;'>$comp</span</h2> 
					  <h2 style='color:#003B71; font-size:20px;'>電話番号（　）: <span style='color:black; font-size:15px;'>$tel</span</h2> 
					  <h2 style='color:#003B71; font-size:20px;'>ご担当者様:<span style='color:black; font-size:15px;'>$fromname</span</h2> 
					  <h2 style='color:#003B71; font-size:20px;'>住所: <span style='color:black; font-size:15px;'>$add</span</h2> 
					  </body>
					  </html>";   
	 
		if($mail->Send())  
		{
			echo'<script type="text/javascript">
			window.alert("Submission Successful")
			</script>';
			echo'<script>window.location.href="index.php"; </script>';
		}
		else
		{
			echo'<script type="text/javascript">
			window.alert("There was an error!")
			</script>';
		}
// if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
// 	if (mail ($to, $subject, $body, $from)) {
// 		$result='<div class="alert alert-success">Form Submitted</div>';
// 	} else {
// 		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again!</div>';
// 	}
// }
	}
?>
