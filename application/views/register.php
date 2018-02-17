<?php echo validation_errors('<div class="alert alert-danger">', '*</div>'); ?>
<form action="<?php echo base_url(); ?>users/register" method="post">
	<div class="form-group">
	   <label for="">First Name :</label>
	   <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" 
	   value="<?php echo set_value("firstname"); ?>">
	</div>
	<div class="form-group">
	   <label for="">Last Name :</label>
	   <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"
	   value="<?php echo set_value("lastname"); ?>">
	</div>
	<div class="form-group">
	   <label for="">Username :</label>
	   <input type="text" class="form-control" name="username" placeholder="Enter Username"
	   value="<?php echo set_value("username"); ?>">
	</div>
	<div class="form-group">
	   <label for="">Email :</label>
	   <input type="email" class="form-control" name="email" placeholder="Enter Email"
	   value="<?php echo set_value("email"); ?>">
	</div>
	<div class="form-group">
	   <label for="">Password :</label>
	   <input type="password" class="form-control" name="password" placeholder="Enter Password"
	   value="<?php echo set_value("password"); ?>">
	</div>
	<div class="form-group">
	   <label for="">Confirm Password :</label>
	   <input type="password" class="form-control" name="password2" placeholder="Confirm Password"
	   value="<?php echo set_value("password2"); ?>">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="register">
	</div>
</form>