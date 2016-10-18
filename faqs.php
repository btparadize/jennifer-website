<?php include_once('templates/variables.php'); ?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/nav.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-8 col-lg-8">
			<div class="panel-group" id="faqs-accordion" role="tablist" aria-multiselectable="true">
<?php
// var_dump($variables);
// exit();
	for ($i=0; $i < count($variables['faqs']); $i++) { 
?>

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
			      <h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#faqs-accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
						<?php echo $variables['faqs'][$i]['q']; ?>
					</a>
			      </h4>
			    </div>
			    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
			      <div class="panel-body">
			        <?php echo $variables['faqs'][$i]['a']; ?>
			      </div>
			    </div>
			  </div>
<?php
	}
?>
			</div>
		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>