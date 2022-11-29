<!DOCTYPE html>
<html lang="en">
 <head>
    <title>HorizonPlus Bank</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">HorizonPlus Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <?php if($this->session->userdata('level')==='1'):?>
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit">Përdoruesit</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>adminat">Adminat</a>
      <?php elseif($this->session->userdata('level')==='2'):?>
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit">Përdoruesit</a>
      <?php else:?>
        <a class="nav-item nav-link active" href="http://localhost/horizonplus/page/home">Home User <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit/borgj">Kerko Borgj</a>
       <?php endif;?>
       <a class="nav-item nav-link " href="<?php echo site_url('login/logout');?>">Sign Out</a>
    </div>
  </div>
</nav>
    <div class="container">
      <div  style="float: right;margin-top: 5%" class="row">
  

        <div class="">
          <h4>Pershendetje  <?php echo $this->session->userdata('names');?> !</h4>
            <?php  $id=$this->session->userdata('ids');?>
        </div>

        </div>
              <div class="container">
                 <div>
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
          echo $row['funds']; echo "€";} ?>
  
        </h3>
        <p>Fondet</p>
        
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h3 class="fs-2"><?php $query = $this->db->query("SELECT * FROM `account` WHERE `uid`=$id");
          foreach($query->result_array() as $row){
          echo $row['funds']; echo "€";} ?>
  
        </h3>
        <p>Balanci</p>
        
      </div>
    </div>
  </div>
               <h3 style="text-align: center;">
                <button class="btn btn-primary" style="text-align: center">Apliko per Borgj</button>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>

            </div>
              </div>
                
      </div>
   

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
