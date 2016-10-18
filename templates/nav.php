<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 bg-warning">
			<ul class="nav navbar-nav">
				<li class="<?php echo is_current('home') ? 'active' : ''; ?>"><a href="home.php">HOME</a></li>
				<li class="<?php echo is_current('about-us') ? 'active' : ''; ?>"><a href="about-us.php">ABOUT US</a></li>
				<li class="<?php echo is_current('products') ? 'active' : ''; ?>"><a href="products.php">PRODUCTS</a></li>
				<li class="<?php echo is_current('template') ? 'active' : ''; ?>"><a href="template.php">TEMPLATE</a></li>
				<li class="<?php echo is_current('help-center') ? 'active' : ''; ?>"><a href="help-center.php">HELP CENTER</a></li>
				<li class="<?php echo is_current('contact') ? 'active' : ''; ?>"><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>