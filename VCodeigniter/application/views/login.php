<div class="row">
	<div class="col-sm-4"></div>

	<div class="col-sm-4">
		
		<div class="panel panel-info">
			<div class="panel-heading text-center">
				User Login

			</div>

			<div class="panel-body">
				<center>
					
				</center>

				<form method="POST" action="<?php echo BASEURL;?>index.php/welcome/usercheck">
					
					<div class="form-group">
						<label>Email-Id</label>
					<input type="text" name="email" class="form-control">
						
					</div>

					<div class="form-group">
						<label>Password</label>
					<input type="text" name="password" class="form-control">
						
					</div>

					<div class="form-group text-center">
						<button class="btn btn-primary">Login</button>
					</div>





				</form>


			</div>

			

		</div>
		<!-- panel end -->

	</div>
	<!-- col 4 -->

	<div class="col-sm-4"></div>
	
</div>