<html>
	<head>
		<title>HorizonPlus Bank</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">HorizonPlus Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>pages/view">Home <span class="sr-only">(current)</span></a>
      <?php if($this->session->userdata('level')==='1'):?>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit">Përdoruesit</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>adminat">Adminat</a>
      <?php elseif($this->session->userdata('level')==='2'):?>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit">Përdoruesit</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit/indexB">Borgjet</a>
      <?php else:?>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>perdoruesit/borgj">Apliko per Borgj</a>
       <?php endif;?>
       <a class="nav-item nav-link " href="<?php echo site_url('login/logout');?>">Dil</a>
    </div>
  </div>
</nav>
<div  class="container">
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_created').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_updated').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_deleted').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>
       <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>
</div>
	<body>
	