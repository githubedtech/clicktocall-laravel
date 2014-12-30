<!DOCTYPE html>
<html lang="en">
<head>
	<title>Click To Call Tutorial</title>
	<!-- We use Twitter Bootstrap as the default styling for our page-->
	<link rel="stylesheet" 
		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" 
		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Include CSS for our third-party telephone input jQuery plugin-->
	<link rel="stylesheet" href="/vendor/intl-phone/css/intlTelInput.css">
</head>
<body>
	<div class="container">
		<h1>Click To Call</h1>
		<p>
			Click To Call converts your website's users into engaged customers by 
			creating an easy way for your customers to contact you right on your website.
		</p>
		<hr>

		<!-- C2C contact form-->
		<div class="row">
			<div class="col-md-12">
				<form id="contactForm" role="form">
					<div class="form-group">
						<h3>Call Sales</h3>
						<p class="help-block">
							Enter your phone number 
							below, and our team will contact you right away.
						</p>
					</div>
					<div class="form-group">
						<input type="text" id="phoneNumber" 
							placeholder="(555) 555-5555" class="form-control">
					</div>
					<button type="submit" class="btn btn-default">
						Contact Sales
					</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Include page dependencies -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/vendor/intl-phone/js/intlTelInput.min.js"></script>
	<script src="/app.js"></script>
</body>
</html>
