<?php require_once('templates/main.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://lorempixel.com/800/350" alt="slide 1" class="img-responsive">
						<div class="carousel-caption">
							Lorem ipsum dolor sit amet.
						</div>
					</div>
					<div class="item">
						<img src="http://lorempixel.com/800/350" alt="slide 2" class="img-responsive">
						<div class="carousel-caption">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, eaque.
						</div>
					</div>
					<div class="item">
						<img src="http://lorempixel.com/800/350" alt="slide 3" class="img-responsive">
						<div class="carousel-caption">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora esse distinctio labore quibusdam sed nobis!
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span 	class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="page-header text-center">
				<h1>It Starts with your own design</h1>
				<p class="text-warning">Let’s our team tests every style and color of your design with standard printability, durability, and fit.</p>
				<p class="text-warning">Find a style in your favorite brands to customize for any group or event.</p>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div class="well well-lg">
				<p class="text-center">We<br>Make<br>Memories</p>
				<img src="" class="center-block" alt="">
				<button type="button" class="btn btn-warning btn-lg btn-block">Get Started</button>
			</div>
		</div>
	</div>
</div>

<?php include('templates/footer.php'); ?>