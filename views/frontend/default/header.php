<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url('views/frontend/default/assets/css/bootstrap.min.css');?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('views/frontend/default/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('views/frontend/default/assets/third_party/font-awesome-4.5.0/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('views/frontend/default/assets/third_party/sceditor/minified/themes/default.min.css" type="text/css');?>" media="all" />

</head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url();?>" class="navbar-brand">DhoBB</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
            <a href="#"><i class="fa fa-comments"></i> Discussions</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pencil-square-o"></i> New</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-envelope"></i> Messages</a>
            </li>
          </ul>
          <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo base_url();?>search">
                <div class="input-group">
                     <input name="query" class="form-control" placeholder="Search" type="text">
                    <div class="input-group-btn">
                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row contentpadding">