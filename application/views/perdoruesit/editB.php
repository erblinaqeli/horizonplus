<div class="container" style="margin-top: 5%"><h2>
  Modifiko Kerkesë per Borgjë</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('perdoruesit/updateB'); ?>
  <div class="form-group">
    <div class="form-group">
    <label>Emri Mbiemri</label>
    <input type="text" id=""value="<?php echo $borgjet['fullname'];?>" class="form-control" name="username" placeholder="" readonly>
  </div>
  <div class="form-group">
    <label>Numri i Gjirollogarise</label>
    <input type="text" id=""value="<?php echo $borgjet['account_nr'];?>" class="form-control" name="account_nr" placeholder="" readonly>
  </div>
  <div class="form-group">
    <label>Arsyeja e Kerkeses per Borxh</label>
    <input type="text" class="form-control" name="arsyeja" value="<?php echo $borgjet['arsyeja'];?>" readonly>
  </div>
  
    <div class="form-group">
    <label>Shuma e Borgjit</label>
     <input type="text" class="form-control" value="<?php echo $borgjet['shuma'];?>"name="shuma" placeholder="">
  </div>
   
     <input type="hidden" class="form-control" name="bid" value="<?php echo $borgjet['bid'];?>" placeholder="">
     <input type="hidden" class="form-control" name="aprovim/refuzim" value="1" placeholder="">

   
  
  <button type="submit" class="btn btn-primary">Aprovo</button>
  </div>
</form>
</div>