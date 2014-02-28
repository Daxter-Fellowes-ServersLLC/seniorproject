<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		.form-signin
	{
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	}
	.form-signin .form-signin-heading, .form-signin .checkbox
	{
		margin-bottom: 10px;
	}
	.form-signin .checkbox
	{
		font-weight: normal;
	}
	.form-signin .form-control
	{
		position: relative;
		font-size: 16px;
		height: auto;
		padding: 10px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.form-signin .form-control:focus
	{
		z-index: 2;
	}
	.form-signin input[type="text"]
	{
		margin-bottom: -1px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	.form-signin input[type="password"]
	{
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
	.account-wall
	{
		margin-top: 20px;
		padding: 40px 0px 20px 0px;
		background-color: #f7f7f7;
		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}
	.login-title
	{
		color: #555;
		font-size: 18px;
		font-weight: 400;
		display: block;
	}
	.profile-img
	{
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	}
	.need-help
	{
		margin-top: 10px;
	}
	.new-account
	{
		display: block;
		margin-top: 10px;
	}
	</style>
<html>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
		<br /><br /><br /><br /><br /><br /><br />
            <h1 class="text-center login-title">Sign in to continue to Application Name</h1>
			<div id="infoMessage"><?php echo $message;?></div>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <?php echo form_open("auth/login", array('class' => 'form-signin'));?>
				
				
				<?php 
				$data = array('class' => 'form-control', 'id' => 'identity', 'name' => 'identity', 'type' => 'text', 'placeholder' => "Email");
				echo form_input($data);?>
				
				<?php
				$data = array('class' => 'form-control', 'id' => 'password', 'name' => 'password', 'type' => 'password', 'placeholder' => "Password");
				echo form_input($data);
				?>
				
				<?php 
				$data = array('class' => 'btn btn-lg btn-primary btn-block', 'id' => 'submit', 'value' => 'Login');
				echo form_submit($data, 'Sign in'); 
				?>
                <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button> -->
                <label class="checkbox pull-left">
					<?php $data = array('id' => 'remember', 'value' => 1, 'checked' => FALSE, 'name' => 'remember'); ?>
                    Remember Me<?php echo form_checkbox($data);?>
                </label>
				<?php
				echo anchor('auth/forgot_password', 'Need help?', array('class' => 'pull-right need-help'));;?>
				<span class="clearfix"></span>
				<?php echo form_close();?>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  </body>
</html>