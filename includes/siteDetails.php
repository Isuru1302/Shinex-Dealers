<?php
	if(isset($_GET["update"])){
		switch ($_GET["update"]) {
			case 'success':
				echo '<script language="javascript">';
				echo 'alert("Message sent successfully!!")';
				echo '</script>';
				break;
			case 'fail':
				echo '<script language="javascript">';
				echo 'alert("Message sent Fail!!")';
				echo '</script>';
				break;
		}
	}
?>

<div class="site_Details" id="site_Details">
	
	<div class="container">
		<div class="row">
			
			<div class="col-12 col-sm-6 col-md-4  justify-content-center">
				
				<div class="site_Details_about wow fadeInLeft" data-wow-duration="1.5s">
					<img src="IMG/logo.png" height="40px" width="50px;">
					
					<span class="site_Details_head" ><?php echo $storename; ?></span>

					<p style="margin-top: 2em;color:#fff;">
						Weekday :   &nbsp;&nbsp;<span><?php echo $storewdOpen; ?></span><br>
						Weekend :   &nbsp;&nbsp;<span><?php echo $storeendOpen; ?></span>
					</p>
					<hr>

					<span class="site_Details_social">
						<a href="<?php echo $storefblink; ?>"><i class="fab fa-facebook-square"></i></a>
						<a href="<?php echo $storeytlink; ?>"><i class="fab fa-youtube"></i></a>
						<a href="<?php echo $storeinstalink; ?>"><i class="fab fa-instagram"></i></a>
					</span>

				</div>

			</div>

			<div class="col-12 col-sm-6 col-md-4 justify-content-center">
				<div class="site_Details_contacts wow fadeInLeft" data-wow-duration="1.5s">
					<span class="site_Details_head">Contacts</span>

					<span class="site_datails_address" >

						<p style="margin-top: 2em;">
							<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp; <span><?php echo $storeaddress; ?></span>
						</p>

						<p>
							<i class="fas fa-phone"></i> &nbsp;&nbsp;&nbsp;<span><?php echo $storemainTP; ?></span><br>
						</p>

						<p>
							<i class="fas fa-fax"></i>&nbsp;&nbsp;&nbsp;<span>FAX: <?php echo $storeFAX; ?></span><br>
						</p>

						<p>
							<i class="fas fa-envelope"><a style="color:#000;text-decoration: none;" href="mailto:<?php echo $storeemail; ?>"></i>&nbsp;&nbsp;&nbsp; <span style="color: #fff;"><?php echo $storeemail; ?></span></a>
						</p>
					</span>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-4 justify-content-center">
				<div class="mail_us wow fadeInLeft" data-wow-duration="1.5s">
					<span class="site_Details_head">Reach Us</span>
					<form action="includes/usermessage.php" method="POST" style="margin-top: 2em;">

						<input type="text"  name="username" placeholder="Name" required="" style="color: #fff;padding: 0px 12px;font-size:15px;width: 100%;margin-bottom: 0.5em;border: 1px solid #6c757d;font-weight: 400;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;border-radius: 0">

						<input type="email" name="email" placeholder="Email" required="">


						<textarea name="message" placeholder="Message" rows="1" required=""></textarea>


						<input type="submit" name="send" value="Send">
					</form>
				</div>
			</div>

		</div>
	</div>

</div>