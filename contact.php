
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3">
			<form method="POST" action="send.php">
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Send</button>
			</form>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<img src="http://lorempixel.com/300/300" alt="product 1">
		</div>
	</div>
</div>

<?php include('templates/footer.php'); ?>