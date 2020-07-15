<?php if (!empty($message)){ ?>    
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo $message;?>
</div>
<?php }?>    


<div class="logo">
		<a href="<?php echo site_url();?>">
			<img src="<?php echo base_url().'assets/backend/img/logo-big.png';?>" alt="" /> 
		</a>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
<?php echo form_open('login/proses', array('class' => "login-form", 'autocomplete' => 'off','id'=>'login', 'role'=>'form')) ?>
			<h3 class="form-title">Login Your Account</h3>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="userid"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Remember Me
				</label>
				<button type="submit" class="btn blue pull-right">
				Sign-in <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			
<?php echo form_close(); ?>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
		
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2018 &copy; Science by Team
	</div>
