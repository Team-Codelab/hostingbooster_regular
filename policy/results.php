<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Results - Softaculous: Privacy Policy &amp; Terms and Conditions Generator - TermsFeed</title>
<link href="includes/css/style.css" rel="stylesheet" type="text/css" />
<meta name="robots" content="nofollow, noindex" />
</head>
<body>
<div id="wrapper">
	<div id="top">
		<div class="container">
			<div class="logo-about cf">
				<div id="logo">
					<h3 class="incl">
						<a href="http://termsfeed.com/?utm_source=Logo&utm_medium=Script&utm_campaign=Softaculous+Script+1.0" title="TermsFeed">
							TermsFeed
						</a>
					</h3>
				</div><!-- end #logo -->
				<div id="about">
					<p>
						Generate Privacy Policy &amp; Terms and Conditions for your site<br />98% of customers recommend us. <a href="http://termsfeed.com/?utm_source=Link+from+Header&utm_medium=Script&utm_campaign=Softaculous+Script+1.0" title="TermsFeed">Visit TermsFeed.com</a>
					</p>
				</div><!-- end #about -->
			</div><!-- end .logo-about -->
		</div><!-- end .container -->
	</div><!-- end #top -->
	<div id="delete">
		<div class="container">
			<p>
				<strong>DELETE SCRIPT</strong>: After copying your agreements, delete the script from your server by deleting the script folder.
			</p>
		</div><!-- end .container -->
	</div><!-- end #delete -->
	<div id="page">
		<div class="container">
			
			<?php
			$remote_url = 'http://termsfeed.com/introduce/softaculous/script/get.php';

			require_once './class.php';

			$agreement_type_pp = '';
			$agreement_type_tc = '';

			if (isset($_POST) && count($_POST) > 0) {
				try {
					$curl = new cURL(false, false);
					$remoteServerOutput = json_decode(trim($curl->post($remote_url, $_POST)));
					$agreement_type_pp = $remoteServerOutput->agreement_type_pp;
					$agreement_type_tc = $remoteServerOutput->agreement_type_tc;
				} catch (Exception $ex) {
					$agreement_type_pp = $agreement_type_tc = $ex->getMessage();
				}
			?>
			
			<div id="results">
				<div class="title">
					<h1>
						Privacy Policy
						<br />
						Terms and Conditions
						<br />
						<strong>has been generated successfully.</strong>
					</h1>
				</div><!-- end .title -->
				<div class="agreement_unlock c2 cf">
					<div class="agreement c21">
						<div class="paper">
							<div class="sheet">
								<div class="content">
									
									<div class="type c2 cf">
										<div class="about c21">
			                        <h2>
			                          Your <br /> Privacy Policy.
			                        </h2>
			                        <p>
			                          <strong>
			                            How do I copy my <br /> "Privacy Policy" agreement?
			                          </strong>
			                        </p>
			                        <ul>
			                          <li>
												  Click on the text and make sure it appears selected
											  </li>
			                          <li>
												  Right click on "Copy"
											  </li>
			                          <li>
												  Go to your HTML file or WordPress (Joomla etc.) page and right click "Paste" in your content box
											  </li>
			                        </ul>
										</div><!-- end .about -->
										<div class="copy c22">
											<div class="copy_padding">
<textarea onclick="this.focus();this.select()" readonly="readonly" rows="15" cols="60">
<?php echo htmlspecialchars($agreement_type_pp); ?>
</textarea>
											</div><!-- end .copy-padding -->
										</div><!-- end .copy -->
									</div><!-- end .type -->
									
									<br />
									<br />
									
									<div class="type c2 cf">
										<div class="about c21">
			                        <h2>
			                          Your <br /> Terms and Conditions.
			                        </h2>
			                        <p>
			                          <strong>
			                            How do I copy my <br /> "Terms and Conditions" agreement?
			                          </strong>
			                        </p>
			                        <ul>
			                          <li>
												  Click on the text and make sure it appears selected
											  </li>
			                          <li>
												  Right click on "Copy"
											  </li>
			                          <li>
												  Go to your HTML file or WordPress (Joomla etc.) page and right click "Paste" in your content box
											  </li>
			                        </ul>
										</div><!-- end .about -->
										<div class="copy c22">
											<div class="copy_padding">
<textarea onclick="this.focus();this.select()" readonly="readonly" rows="15" cols="60">
<?php echo htmlspecialchars($agreement_type_tc); ?>
</textarea>
											</div><!-- end .copy-padding -->
										</div><!-- end .copy -->
									</div><!-- end .type -->
									
								</div><!-- end .content -->
							</div><!-- end .sheet -->
						</div><!-- end .paper -->
					</div><!-- end .agreement -->
					<div class="unlock c22">
						
						<div class="upgrade upgrade_pp">
							<div class="upgrade_padding">
								<h3>
									Upgrade Your Privacy Policy
								</h3>
								<p>
									<strong>Unlock Premium Clauses for your Privacy Policy</strong> by upgrading today. Get more clauses added to your Privacy Policy agreement.
								</p>
								<br />
								<form method="POST" action="http://termsfeed.com/partners/softaculous/script/">
	                        <input type="hidden" name="site_address" value="<?php echo $_POST['site_address']; ?>" />
	                        <input type="hidden" name="site_name" value="<?php echo $_POST['site_name']; ?>" />
	                        <input type="hidden" name="company_name" value="<?php echo $_POST['company_name']; ?>" />
	                        <input type="hidden" name="country" value="<?php echo $_POST['country']; ?>" />
	                        <input type="hidden" name="state" value="<?php echo $_POST['state']; ?>" />
	                        <input type="hidden" name="email_address" value="<?php echo $_POST['email_address']; ?>" />
									<input type="submit" name="submit" id="submit" class="submit" value="Upgrade My Privacy Policy" />
								</form>
							</div><!-- end .upgrade_padding -->
						</div><!-- end .upgrade -->
						
						<div class="upgrade upgrade_tc">
							<div class="upgrade_padding">
								<h3>
									Upgrade Your Terms and Conditions
								</h3>
								<p>
									<strong>Unlock Premium Clauses for your Terms and Conditions</strong> by upgrading today. Get more clauses added to your Terms and Conditions agreement.
								</p>
								<br />
								<form method="POST" action="http://termsfeed.com/partners/softaculous/script/">
	                        <input type="hidden" name="site_address" value="<?php echo $_POST['site_address']; ?>" />
	                        <input type="hidden" name="site_name" value="<?php echo $_POST['site_name']; ?>" />
	                        <input type="hidden" name="company_name" value="<?php echo $_POST['company_name']; ?>" />
	                        <input type="hidden" name="country" value="<?php echo $_POST['country']; ?>" />
	                        <input type="hidden" name="state" value="<?php echo $_POST['state']; ?>" />
	                        <input type="hidden" name="email_address" value="<?php echo $_POST['email_address']; ?>" />
									<input type="submit" name="submit" id="submit" class="submit" value="Upgrade My Terms and Conditions" />
								</form>
							</div><!-- end .upgrade_padding -->
						</div><!-- end .upgrade -->
						
					</div><!-- end .unlock -->
				</div><!-- end .agreement_unlock -->
			</div><!-- end #results -->
			<?php
			} else {			
			?>
			<div class="ac">
				<br />
				<br />
				<br />
				<h1>
					Error.
				</h1>
				<p>
					Please go back to the index.php file <br /> or visit <a href="http://termsfeed.com/?utm_source=Link+from+results.php+error+message&utm_medium=Script&utm_campaign=Softaculous+Script+1.0" title="TermsFeed">TermsFeed.com</a> to generate your agreeements.
				</p>
				<br />
				<br />
				<br />
				<br />
			</div><!-- end .ac -->
			<?php
			} // Close if isset $_POST
			?>
			
		</div><!-- end .container -->
	</div><!-- end #page -->
	<div id="footer">
		<div class="container">
			<div class="cf">
				<p class="fl">
					Disclaimer: Legal information is not legal advice. <a href="disclaimer.php" title="Disclaimer">Read the disclaimer</a>.
				</p>
				<p class="fr">
					&copy; <a href="http://termsfeed.com/?utm_source=Link+from+Footer&utm_medium=Script&utm_campaign=Softaculous+Script+1.0" title="TermsFeed">TermsFeed</a>
				</p>
			</div><!-- end .cf -->
		</div><!-- end .container -->
	</div><!-- end #footer -->
</div><!-- end #wrapper -->
</body>
</html>