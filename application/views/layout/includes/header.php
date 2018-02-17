<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <title>Game Spacing</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assest/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assest/css/main.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <script src="<?php echo base_url(); ?>assest/js/jquery-1.12.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assest/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assest/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url(); ?>assest/js/respond.min.js"></script>
      <script src="<?php echo base_url(); ?>assest/js/main.js"></script>

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Gamer Space</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
            <?php endif; ?>
          </ul>
          <?php if(!$this->session->userdata('logged_in')) : ?>
           <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/login">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
             <button type="submit" class="btn btn-default" name="submit">Login</button>
           </form>
         <?php else : ?>
             <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
             <button type="submit" class="btn btn-default" name="submit">LogOut</button>
           </form>
         <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
       <div class="col-md-4">
          <?php $this->load->view('layout/includes/sidebare.php'); ?>
         
       </div>
       <div class="col-md-8">
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-heading bg-success">Panel heading without title</div>
              <div class="panel-body">