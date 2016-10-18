<?php require_once('templates/main.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3">
			<form method="POST" action="send.php">
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" placeholder="Subject of Your Message">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message here"></textarea>
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" placeholder="Your Email Address">
				</div>
				<div class="form-group">
					<label for="contact_number">Contact Number</label>
					<input type="password" class="form-control" id="contact_number" placeholder="Your Contact Number">
				</div>
				<button type="submit" class="btn btn-default">Send</button>
			</form>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			
		</div>
	</div>
</div>

<script src=""></script>

<?php include('templates/footer.php'); ?>