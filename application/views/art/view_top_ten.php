
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
				if (!$this->ion_auth->logged_in())
				{
				echo anchor('auth/login', 'Welcome Guest');
				}
				else
				{
				$user = $this->ion_auth->user()->row();
				echo anchor('auth/edit_user/'.$user->id, 'Welcome '.$user->username);
				}
				?>
			</li>
			<?php 
			if ($this->ion_auth->logged_in())
			{
			echo '<li>'.anchor('auth/logout', 'Logout').'</li>';
			}
			?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Welcome to ART INDEX</p>
		<?php //var_dump($images[2]);
		$i = 1;
		$endRowDiv = false;
		?>
		<div class="row">
		<?php foreach($images as $image)
		{	
			
			//$i = 1;
			//var_dump($image->id[1]);
			if (($image->id % 4) == 0)
				{
					echo '<div class="row">';
					$endRowDiv = true;
				}
			//var_dump($image->id = $i);
			echo '<div class="col-md-3">';
			$imgdata = array('alt' => '125x125', 'src' => $image->url);
			echo anchor(base_url($image->url), img($imgdata), array('class' => 'thumbnail'));
			echo $image->description;
			echo '</div>';
			if ($endRowDiv)
				{
					echo '</div>'; //Row Div
				}
			$i++;
			$endRowDiv = false;
		
			//echo $image->url.'<br />';
		}
		?>
		</div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  </body>
</html>
