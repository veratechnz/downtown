<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the phone field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'info@downtownparking.co.nz'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Downtown Parking Web Site < info@downtownparking.co.nz >' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!-- head -->
<?php include 'inc/head.inc.php';?>
<!-- head -->
<!-- Main navigation -->
<?php include 'inc/nav.inc.php';?>
<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<section id="page">
			<header class="page-header mb30">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 visible-md visible-lg">
							<h1>Contact</h1>
						<ul class="breadcrumb visible-md visible-lg">
								<li><a href="#">Home</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30 pb30">
				<div class="container">
					<div class="row">
					<!-- Sidebar -->
					<?php include 'inc/sidebar.inc.php';?>
					<!-- End Sidebar -->
						<!-- page content-->
					<section class="col-md-9 boardbottom">
						<h2>Contact</h2>
							<div class="row topmarginb">
								<div class="col-xs-3">
									<img src="images/foot-logob.png" class="text-center center-block" alt="Downtown Parking Auckland" id="footerLogo">
								</div>
								<div class="col-xs-7 col-xs-offset-1 text-center">
									<div class="footerWidget">
									<address>
										<p><i class="icon-phone"></i>&nbsp;+64 09 379 0301</p>
										<p><i class="icon-mail-alt"></i>&nbsp;<a href="mailto:info@downtownparking.co.nz">info@downtownparking.co.nz</a></p>
										<p> <i class="icon-location"></i>&nbsp;9/70 Shortland Street, 
										Shortland Chambers Building, 
										Auckland 1010<br>
										PO Box 3413
										Shortland Street
										Auckland 1140</P>
										</address>
									</div>
								</div>
							 <div class="col-xs-12">
						        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						          <fieldset>
						            <?php if(isset($hasError)) { //If errors are found ?>
						              <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
						            <?php } ?>

						            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						              <div class="alert alert-success">
						                <p><strong>Message Successfully Sent!</strong></p>
						                <p>Thank you for using our contact form, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
						              </div>
						            <?php } ?>

						            <div class="form-group">
						              <label for="name"><p>Your Name:</p><span class="help-required"></span></label>
						              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
						            </div>

						            <div class="form-group">
						              <label for="phone"><p>Your Phone Number:</p><span class="help-required"></span></label>
						              <input type="text" name="phone" id="phone" value="" class="form-control required" role="input" aria-required="true" />
						            </div>

						            <div class="form-group">
						              <label for="email"><p>Your Email:</p><span class="help-required"></span></label>
						              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
						            </div>

						            <div class="form-group">
						              <label for="message"><p>Message:</p><span class="help-required"></span></label>
						              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
						            </div>

						            <div class="actions">
						              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
						              <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
						            </div>
						          </fieldset>
						        </form>
    						</div>
    					</div><!-- rows -->
					</section>
						<!--end page content-->
				</div>
			</div>
		</section>
		<!-- tabs & list -->
		<?php include 'inc/info.inc.php';?>
		<!-- tabs & list -->
		<!-- services -->
		<?php include 'inc/services.inc.php';?>
		<!-- services -->
		</section>
		<!-- content -->
		<!-- footer -->
		<?php include 'inc/footer.inc.php';?>
		<!-- End footer -->
		</div>
		<!-- global wrapper -->
		<!-- All JS -->
		<?php include 'inc/alljs.inc.php';?>
		<!-- ALL JS -->
</body>
</html>
