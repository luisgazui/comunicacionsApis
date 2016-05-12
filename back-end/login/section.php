<div class="container" id="parent">

  <div class="row vertical-center-row">
	
	<div class="col-md-4"></div>
	
	<div class="col-md-4" id="child">
		
		<div class="login-form">
			
			<img src="public/img/Logo.png" alt="Smiley face" height="136" width="180">			
			<!-- form start -->					
			<form action="panel.php" method="POST">
			  <div class="form-group">
				<label for="exampleInputEmail1"><!--Email address--></label>
				<div class="input-group">
				<span class="input-group-addon email-addon"><i class="fa fa-user"></i></span>
				<input type="email" class="form-control email" id="exampleInputEmail1" placeholder="Usuario">
				</div>
			  </div>
			  <div class="form-group">						
				<label for="exampleInputPassword1"><!--Password--></label>
				<div class="input-group">
				<span class="input-group-addon password-addon"><i class="fa fa-key"></i></span>
				<input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  </div>					  
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Recordarme
				</label>
			  </div>					  
			  <div class="clearfix"></div>					  
			  <button type="submit" class="btn btn-custom"><i class="fa fa-sign-in"></i> Ingresar al Sistema</button>
			</form>								
		</div>				
	</div>			
	<div class="col-md-4"></div>			
  </div>
</div>