<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="contentWrapper">
			<div>
				<div>
					<img src="tab-header-2.jpg" />
				</div>
				<div class="btn">
					<div>
						<a href="tabs/Country Profile  1st Page.docx">Our Country</a>
				    </div>
				    <div>
				    	<a href="tabs/INVESTMENT OPPORTUNITIES.docx">Investment Opportunity</a>
					</div>
					<div>
						<a href="tabs/Visa_form.pdf">Download Visa Form</a>
					</div>
				</div>
			</div>
			<div class="gallery">
				<p>Gallery</p>
			</div>
			<div class="photo" id = "collager">
				<div class="polaroid">
					<img src="images/Burkina-Faso-The-national-art.jpg">
					<div class = "caption">
						<p>Burkina Faso The national art</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/Burkina-Faso-Africa-Bani.jpg">
					<div class = "caption">
						<p>Burkina Faso Africa Bani</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/2009-7th-November.jpg">
					<div class = "caption">
						<p>H.E. Mr. Idriss Raoua OUEDRAOGO meets His<br> Excellency Mr. MahindaRajapaksa,the President<br> of Democratic Socialist Republic of Sri Lanka</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/Center-of-Ouagadougou-Burkina-Faso.jpg">
					<div class = "caption">
						<p>Center of Ouagadougou Burkina Faso</p>
					</div>
				</div><br>
				<div class="polaroid">
					<img src="images/Gasbeogo-Lassane-and-Kadidia-Nikiema-train-at-Brentwood-school-in-Essex.jpg">
					<div class = "caption">
						<p>Gasbeogo Lassane and Kadidia Nikiema<br> train at Brentwood school in Essex</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/Tenakourou-(749-m)-the-highest-mountain.jpg">
					<div class = "caption">
						<p>Tenakourou (749-m) the highest mountain</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/Untitled-1.jpg">
					<div class = "caption">
						<p>President Blaise Compaore</p>
					</div>
				</div>
				<div class="polaroid">
					<img src="images/Waterfalls-at-Karfiguela-Burkina-Faso.jpg">
					<div class = "caption">
						<p>Waterfalls at Karfiguela Burkina Faso</p>
					</div>
				</div>
			</div>
			<div class="regstration">
				<p>Contact Us</p>
			</div>
			<div class="contact">
				<form  action="<?php echo $_SERVER['REQUEST_URI']; ?>"  method ="POST">
					<table >
					<tr>
						<td>
							<div> 
							Name:<br>
							<INPUT TYPE="TEXT" NAME="name" SIZE="20"><br>
							</div>
							<div>
							Email:<br>
							<INPUT TYPE="TEXT" NAME="email" SIZE="20"><br>	
							</div>
							<div>
							Phone:<br>
							<INPUT TYPE="TEXT" NAME="phone" SIZE="20"><br>
							</div>
						</td>	
						<td>
							<div>
								Description:<br>
								<textarea rows="10" cols="30" NAME="description">
								</textarea>
							</div>
							<div>
								<input type="submit" name="submit" value="submit" style="width: 78px;float: right;position: relative;top: 30px;border-radius: 5px;height: 26px;">
							</div>
						</td>
					</tr>
					</table>
				</form>
				</div>
				<?php 
						if(isset($_REQUEST['submit'])){
							$name=$_REQUEST['name'];
							$email=$_REQUEST['email'];
					 		$phone=$_REQUEST['phone'];
					 		$description=$_REQUEST['description'];

							require_once("PHPMailer-master/class.phpmailer.php");
							$mail = new PHPMailer(); 
							$mail->Host = 'ssl://smtp.gmail.com';
							$mail->Port = 465;
							//$mail->SMTPSecure = 'tls';   //or try 'ssl' 
							$mail->SMTPSecure = "SSL";
							$mail->IsSMTP(); // send via SMTP
							$mail->IsSMTP(); // send via SMTP
							//IsSMTP(); // send via SMTP
							$mail->SMTPAuth = true; // turn on SMTP authentication
							$mail->Username = "donamitkumaryadav@gmail.com"; // SMTP username
							$mail->Password = "amitkumaryadav"; // SMTP password
							$webmaster_email = "donamitkumaryadav@gmail.com"; //Reply to this email ID
							$email="amitucer61@gmail.com"; // Recipients email ID
							$rname="name"; // Recipient's name
							$mail->From = $webmaster_email;
							$mail->FromName = "Burkina Faso";
							$mail->AddAddress($email,$rname);
							$mail->AddReplyTo($webmaster_email,"Burkina Faso");
							$mail->WordWrap = 50; // set word wrap
							//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
							//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
							$mail->IsHTML(false); // send as HTML
							$mail->Subject = "Notification";
							$mail->Body = "NAME:-".$name."<br><br>"."Email:-".$email."<br><br>"."Phone no:-".$phone."<br><br>"."Description:-".$description; //HTML Body
							$mail->AltBody = "Notification information"; //Text Body
							if(!$mail->Send())
							{
							echo "Mailer Error: " . $mail->ErrorInfo;
							}
							else
							{
							echo "Message has been sent";
							}
						}
				?>
				
			
			<div style="background: #006637;height: 31px;">
				<p style="float: right;font-size: 19px;color: white;margin-right: 7px;">Designed by Ramanan Corporation</p>
			</div>
			<a href = "http://www.facebook.com/dialog/pagetab?app_id=397865700321865&next=http://localhost/burkinafasofbtab/template.html" > Install </a>
		
		</div>

		<script type="text/javascript" src="build/dojo/dojo.js" data-dojo-config="async: 1, isDebug: 0"></script>
		<script type="text/javascript">
			require(['dijitx/widget/Collager', 'dojo/domReady!'], function (Collager){
				var c = new Collager({
					id: 'collager'
				}, 'collager')
			})
		</script>
	</body>
</html>