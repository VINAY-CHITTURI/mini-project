<!DOCTYPE html>
<html>
  <head>
     <title>Macho</title>
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css")?>">
     <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/style.css">  
     <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class='navbar-brand' href="<?php echo base_url(); ?>">original</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>posts/create">Create Pots</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">