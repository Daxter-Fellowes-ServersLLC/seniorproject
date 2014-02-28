<?php 
if (!$this->ion_auth->logged_in())
{
$user = array('username' => 'Guest', 
	'first_name' => 'Guest', 'last_name' => '',
	'email' => '');
}
else
{
$user=$this->ion_auth->user()->row();
}
//var_dump($user);?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Art Project</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
	body {
		padding-top: 50px;
	}
	.starter-template {
	padding: 40px 15px;
	text-align: center;
	}	
	
	/* Special class on .container surrounding .navbar, used for positioning it into place. */
	.navbar-wrapper {
	  position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  z-index: 20;
	  margin-top: 20px;
	}

	/* Flip around the padding for proper display in narrow viewports */
	.navbar-wrapper .container {
	  padding-left: 0;
	  padding-right: 0;
	}
	.navbar-wrapper .navbar {
	  padding-left: 15px;
	  padding-right: 15px;
	}

	.navbar-content
	{
		width:320px;
		padding: 15px;
		padding-bottom:0px;
	}
	.navbar-content:before, .navbar-content:after
	{
		display: table;
		content: "";
		line-height: 0;
	}
	.navbar-nav.navbar-right:last-child {
	margin-right: 15px !important;
	}
	.navbar-footer 
	{
		background-color:#DDD;
	}
	.navbar-footer-content { padding:15px 15px 15px 15px; }
	.dropdown-menu {
	padding: 0px;
	overflow: hidden;
	}
</style>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
			<li><?php
				// if (!$this->ion_auth->logged_in())
				// {
				// echo anchor('auth/login', 'Welcome Guest');
				// }
				// else
				// {
				// $user = $this->ion_auth->user()->row();
				// echo 'Welcome '.$user->username);
				// }
				$userinput = 'Déjà vu';
				echo urlencode($userinput)
				?>
			</li>
			<?php 
			if ($this->ion_auth->logged_in())
			{
			echo '<li>'.anchor('auth/logout', 'Logout').'</li>';
			}
			?>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="http://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/twDq00QDud4/s120-c/photo.jpg"
                                                                alt="Alternate Text" class="img-responsive" />
                                                            <p class="text-center small">
                                                                <a href="#">Change Photo</a></p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span>Joe Doe</span>
                                                            <p class="text-muted small">
                                                                J@J.com</p>
                                                            <div class="divider">
                                                            </div>
															<?php 
															Login
															?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
																<?=anchor('auth/change_password', 'Change Password', array('class' => 'btn btn-default btn-sm'))?>
                                                            </div>
                                                            <div class="col-md-6">
																<?php
																$data = array('class' => 'btn btn-default btn-sm pull-right');
																if (!$this->ion_auth->logged_in())
																	{
																		$data = array('class' => 'btn btn-default btn-sm pull-right disabled');
																	}?>
                                                                <?=anchor('auth/logout', 'Sign Out', $data)?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Welcome to ART INDEX</p>
		<div class="row">
		<?php var_dump($images);?>
		
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  </body>
</html>
