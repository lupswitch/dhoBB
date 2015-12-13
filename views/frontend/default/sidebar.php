<div class="col-md-3">
    <div class="page-header">
        <?php if ($this->session->userdata('user_name')){?>
        <div class="">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/ridho.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#"><?php echo $this->session->userdata('user_name');?></a></h4>
                <ul class="navuser nav-pills">
                  <li><a href="#" title="Your Profile"><i class="fa fa-user"></i></a></li>
                  <li><a href="#" title="Your Messages"><i class="fa fa-envelope"></i></a></li>
                  <li><a href="#" title="Your Threads"><i class="fa fa-comments"></i></a></li>
                  <li class="dropdown">
                    <a title="Options" aria-expanded="true" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-gear"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="download">
                        <li><a href="#">User Panel</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Edit Options</a></li>
                        <li><a href="#">Edit Signature</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url('user/logout');?>">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            <ul class="list-group">
              <li class="list-group-user linebottom">
                <span class="badge">14</span>
                <a href="#">Recent Discussions</a>
              </li>
              <li class="list-group-user linebottom">
                <span class="badge">14</span>
                <a href="#">Hot Discussions </a>
              </li>
              <li class="list-group-user linebottom">
                <span class="badge">14</span>
                <a href="#">Best of the Best</a>
              </li>
            </ul>
        </div>
        <?php }else{?>
        <div class="">
         <strong>Hello, Guest!</strong>
         <p>It looks like you're new here. If you want to get involved, click one of these buttons!</p>
         <a href="<?php echo base_url('user/login');?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Sign In</a>
         <a href="<?php echo base_url('user/register');?>" class="btn btn-danger"><i class="fa fa-user-plus"></i> Register</a>
         </div>
        <?php }?>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Hot Threads</div>
        </div>

        <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/noavatar.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <p><a href="#">How i can select most common value with codeigniter</a></p>
                <p>Last Post By <a href="#">ridho</a> (92 replies) 3 hour ago in <a href="#">Helpers</a></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/noavatar.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <p><a href="#">How i can select most common value with codeigniter</a></p>
                <p>Last Post By <a href="#">ridho</a> (92 replies) 3 hour ago in <a href="#">Helpers</a></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/noavatar.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <p><a href="#">How i can select most common value with codeigniter</a></p>
                <p>Last Post By <a href="#">ridho</a> (92 replies) 3 hour ago in <a href="#">Helpers</a></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/noavatar.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <p><a href="#">How i can select most common value with codeigniter</a></p>
                <p>Last Post By <a href="#">ridho</a> (92 replies) 3 hour ago in <a href="#">Helpers</a></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo base_url('views/frontend/default/assets/img/noavatar.jpg');?>" alt="">
                </a>
              </div>
              <div class="media-body">
                <p><a href="#">How i can select most common value with codeigniter</a></p>
                <p>Last Post By <a href="#">ridho</a> (92 replies) 3 hour ago in <a href="#">Helpers</a></p>
              </div>
            </div>
        </div>
    </div>
</div>