<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo base_url(); ?>index.php/home">Reviews Application</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="<?php echo base_url(); ?>index.php/home"><i class="icon-home icon-white"></i>Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/registration"><i class="icon-user icon-white"></i>Registration</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/about">About</a></li>
                </ul>
                <form class="navbar-form pull-right" action="<?php echo base_url(); ?>index.php/home/login" method="post">
                    <input class="span2" type="text" name="email" placeholder="Email" />
                    <input class="span2" type="password" name="password" placeholder="Password" />
                    <button type="submit" class="btn">Log in</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

