<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 5%; width: 35%"><h2>
	<?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('perdoruesit/register'); ?>
  <div class="form-group">
    <label>Emri Mbiemri</label>
    <input type="text" class="form-control" name="fullname" placeholder="Shkruaj Emrin dhe Mbiemrin">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" id="" class="form-control" name="username" placeholder="Shkruaj Username">
  </div>
    <div class="form-group">
    <label>Email</label>
     <input type="text" class="form-control" name="email" placeholder="Shkruaj Emailin">
  </div>
   <div class="form-group">
    <label>Mobile</label>
     <input type="text" class="form-control" name="mobile" placeholder="Shkruaj Numrin e tel">
  </div>
  <div class="form-group">
	  <label>Password</label>
     <input type="text" class="form-control" name="password" placeholder="">
     <input type="hidden" class="form-control" name="user_level" value='3' placeholder="">

	 
  </div>
  <button type="submit" class="btn btn-default">Shto</button>
</form>
</div>

  </body>
</html>
