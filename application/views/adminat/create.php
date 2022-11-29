<div class="container" style="margin-top: 5%; width: 35%"><h2>
	Shto Admin</h2>
<?php $d=2; ?>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('adminat/create'); ?>
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
     <input type="hidden" class="form-control" name="user_level" value='2' placeholder=""/>

	 
  </div>
  <button type="submit" class="btn btn-default">Shto</button>
</form>
</div>