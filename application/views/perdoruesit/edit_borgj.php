<div class="container" style="margin-top: 5%"><h2>
  Modifiko Kerkes Borgji</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('borgjet/update'); ?>
  <div class="form-group">
    <label>Emri Mbiemri</label>
    <input type="text" class="form-control" name="fullname" value="<?php echo $borgjet['fullname'];?>">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" id=""value="<?php echo $borgjet['username'];?>" class="form-control" name="username" placeholder="">
  </div>
    <div class="form-group">
    <label>Email</label>
     <input type="text" class="form-control" value="<?php echo $borgjet['email'];?>"name="email" placeholder="">
  </div>
   <div class="form-group">
    <label>Mobile</label>
     <input type="text" class="form-control" value="<?php echo $borgjet['mobile'];?>" name="mobile" placeholder="">
  </div>
  <div class="form-group">
    <label>Password</label>
     <input type="text" class="form-control" value="<?php echo $borgjet['password'];?>" name="password" placeholder="">
     <input type="hidden" class="form-control" name="user_level" value=3 placeholder="">
     <input type="hidden" class="form-control" name="uid" value="<?php echo $borgjet['uid'];?>" placeholder="">

   
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>