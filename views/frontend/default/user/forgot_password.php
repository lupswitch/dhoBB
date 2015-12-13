<div class="col-md-9">
  <div class="page-header page-heading">
    <h2 class="pull-left">Forgot Password</h2>
    <ol class="breadcrumb pull-right where-am-i">
      <li><a href="<?php echo base_url();?>">Forum</a></li>
      <li><a href="<?php echo base_url('user');?>">User</a></li>
      <li class="active">Forgot Password</li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <p>Please fill all fields correctly with your real informations.</p>
  <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
            Forgot Password
            </div>
        </div>
        <?php if (validation_errors()){ ?>
			<div class="panel-body">
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors();?>
				</div>
			</div>
		<?php }?>
        <?php if (isset($error)){ ?>
			<div class="panel-body">
				<div class="alert alert-danger" role="alert">
					<?php echo $error;?>
				</div>
			</div>
		<?php }?>
        <div class="panel-body">
        <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" name="forgot_password" value="Forgot Password" class="btn btn-info btn-sm" />
                    </div>
                </div>
            </div>
            </form>
        </div>
  </div>
</div>