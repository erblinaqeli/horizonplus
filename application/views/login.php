<?php echo validation_errors(); ?>
<?php echo form_open('users/auth'); ?>

<div class="container d-flex align-items-center justify-content-center">
	<div class="" style="text-align: : center; width: 30%; margin-top: 10%">
		
			
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" require autofocus>
		</div>
			<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Enter Password" require autofocus>
		</div>
			<button style="width: auto" type="submit" class="btn btn-primary btn-block">Login</button>
		
	</div>
</div>
<?php echo form_close(); ?>