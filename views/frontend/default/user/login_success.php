<div class="col-md-9">
  <div class="page-header page-heading">
    <h2 class="pull-left">Login</h2>
    <ol class="breadcrumb pull-right where-am-i">
      <li><a href="<?php echo base_url();?>">Forum</a></li>
      <li><a href="<?php echo base_url('user');?>">User</a></li>
      <li class="active">Login</li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <p class="lead">Welcome back <?php echo $this->session->userdata('user_name');?>!</p>
  <p>You are now logged in.</p>
</div>