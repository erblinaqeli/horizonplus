<!DOCTYPE html>
<html lang="en">
 <head>
    <title>HorizonPlus Bank</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

    <div class="container">
      <div  style="float: right;margin-top: 5%" class="row">
  

        <div class="">
          <h4>Pershendetje  <?php echo $this->session->userdata('names');?> !</h4>
            <?php  $id=$this->session->userdata('ids');?>
        </div>

        </div>
              <div class="container">
                 <div>
                  <?php if($this->session->userdata('level')==='3'):?>
              <div class="inner">

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Te dhenat e llogaris tuaj</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h3 class="fs-2"><?php $query = $this->db->query("SELECT * FROM `account` WHERE `uid`=$id");
          foreach($query->result_array() as $row){
          echo $row['account_nr'];} ?>
  
        </h3>
        <p>Numri i Llogaris tuaj</p>
        
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h3 class="fs-2"><?php $query = $this->db->query("SELECT * FROM `account` WHERE `uid`=$id");
          foreach($query->result_array() as $row){
          echo $f=$row['funds']; echo "€";} ?>
  
        </h3>
        <p>Fondet</p>
        
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h3 class="fs-2"><?php $query = $this->db->query("SELECT * FROM `borgji` WHERE `uid`=$id AND `aprovim/refuzim`=1"); $b=0;
          foreach($query->result_array() as $row1){
          $b=$row1['shuma'];echo $b; echo "€";}if($b==0){
  echo "0";
} ?>
  
        </h3>
        <p>Borgji</p>
        
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h3 class="fs-2"><?php  $t=0; echo $t=$b+$f; ?>
  
        </h3>
        <p>Bilanci</p>
        
      </div>
    </div>
  </div>
               <h3 style="text-align: center;">
                <a class="btn btn-primary" style="text-align: center" href="<?php echo base_url(); ?>perdoruesit/borgj">Apliko per Borgj</a>
             </h3>
                
      </div>
      <?php elseif($this->session->userdata('level')==='2'):?>
           <div class="inner">
    <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Jeni te kycur si  Admin</h2>

    
          <p>Ju mund te (shtoni/editoni,fshini) Perdorues dhe te Aprovoni apo Refuzoni Borgje.</p>
        </div>
      </div>
        
        <?php else:?>
   <div class="inner">
    <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Jeni te kycur si Super Admin</h2>

    
          <p>Ju mund te (shtoni/editoni,fshini) Perdorues dhe Admina.</p>
        </div>
      </div>
      
        <?php endif;?>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
