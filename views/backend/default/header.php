<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url('views/backend/default/assets/css/bootstrap.min.css');?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('views/backend/default/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('views/backend/default/assets/third_party/font-awesome-4.5.0/css/font-awesome.min.css');?>">

</head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('admin');?>" class="navbar-brand">Home</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="">About dhoBB</a></li>
                  <li><a href="">Documentations</a></li>
                  <li><a href="">Support Forums</a></li>
                  <li><a href="">Feedback</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">View Forum</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
         </ul>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row adminpadding">