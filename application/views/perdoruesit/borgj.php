<div class="container" style="margin-top: 5%; width: 35%"><h2>
	<?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('perdoruesit/borgj'); ?>
  <div class="form-group">
    <label>Arsyeja</label>
  <select class="form-select form-select-lg" name="arsyeja">
  <option value="" selected>Zgjedh nje arsye</option>
  <option value="Pergjithshme">Pergjithshme</option>
  <option value="Per te blere nje vetur" >Per te blere nje vetur</option>
  <option value="Per te blere toke">Per te blere toke</option>
    <option value="Financim i shkollimit">Financim i shkollimit</option>
    <option value="Tjeter">Tjeter</option>
</select>
  </div>
  <div class="form-group">
    <label>Shuma</label>
    <input type="text" id="" class="form-control" name="shuma" placeholder="">
  </div>

    <div class="form-group">
      <?php   $id=$this->session->userdata('ids');?>
     <input type="hidden" class="form-control" name="uid" value="<?php echo $id; ?>">
  </div>
   
  <button type="submit" class="btn btn-primary">Apliko</button>
</form>
</div>