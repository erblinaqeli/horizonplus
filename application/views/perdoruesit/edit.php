<div class="container" style="margin-top: 5%"><h2>
	Modifiko User</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('perdoruesit/update'); ?>
  <div class="form-group">
    <label>Emri Mbiemri</label>
    <input type="text" class="form-control" name="fullname" value="<?php echo $perdoruesit['fullname'];?>">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" id=""value="<?php echo $perdoruesit['username'];?>" class="form-control" name="username" placeholder="">
  </div>
    <div class="form-group">
    <label>Email</label>
     <input type="text" class="form-control" value="<?php echo $perdoruesit['email'];?>"name="email" placeholder="">
  </div>
   <div class="form-group">
    <label>Mobile</label>
     <input type="text" class="form-control" value="<?php echo $perdoruesit['mobile'];?>" name="mobile" placeholder="">
  </div>
  <div class="form-group">
	  <label>Password</label>
     <input type="text" class="form-control" value="<?php echo $perdoruesit['password'];?>" name="password" placeholder="" require>
     <input type="hidden" class="form-control" name="user_level" value=3 placeholder="">
     <input type="hidden" class="form-control" name="uid" value="<?php echo $perdoruesit['uid'];?>" placeholder="">

	 
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>