<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Welcome to CodeIgniter</title>
 
</head>
<body>

    <div id='login_form'>
        <?php 
		$this->load->helper('form');
		echo form_open('login/process'); ?>
            <h2>User Login</h2>
            <br />            
   <?php //if(!is_null($msg) || !empty($msg)){ echo $msg;}
   ?>
   
            <label for='username'>Username</label>
            <?php 
			$data = array('name' => 'username', 'id' => 'username', 'value' => '', 'maxlength' => 25, 'size' => 25);
			echo form_input($data);?>
			<br />
            <label for='password'>Password</label>
            <?php 
			$data = array('name' => 'password', 'id' => 'password', 'value' => '', 'maxlength' => 25, 'size' => 25, 'type' => 'password');
			echo form_input($data);?>
			<br />			
            <?php 
		echo form_submit('loginsubmit', 'Login'); 
		echo form_close();
		echo form_open('logout/logout'); 
		echo form_submit('logout', 'Logout'); 
		form_close(); ?>           
        </form>
    </div>
</body>


</html> 