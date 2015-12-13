<div class="col-md-9">
  <div class="page-header page-heading">
    <h2 class="pull-left">Register</h2>
    <ol class="breadcrumb pull-right where-am-i">
      <li><a href="<?php echo base_url();?>">Forum</a></li>
      <li><a href="<?php echo base_url('user');?>">User</a></li>
      <li class="active">Register</li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <p>Please fill all fields correctly with your real informations.</p>
  <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
            Register
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="user_name" placeholder="Username" value="<?php echo set_value('user_name'); ?>"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" value="" class="form-control" value="<?php echo set_value('password'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="confirm_password" value="" class="form-control" value="<?php echo set_value('confirm_password'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" name="register" value="Register" class="btn btn-primary btn-sm" />
                    </div>
                </div>
            </div>
            </form>
        </div>
  </div>
</div>