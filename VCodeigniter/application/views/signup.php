
	<div class="container" style="background:url( <?php echo BASEURL;?>assets/images/c2.jpg); ">
		<div class="col-sm-2"></div>

		<div class="col-sm-8">

			<div class="row">
				
				<form method="POST" action="<?php echo BASEURL;?>index.php/welcome/saveuser">

				<h3 class="text-center"><b> NEW USER</b></h3>


						<div class="row">
							<label class="control-label col-sm-2">First Name</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="fname" name="firstname">
							</div>

						</div><!--group end here-->

						
						<br>

						<div class="row">
							<label class="control-label col-sm-2">Last Name</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="lname" name="lastname">
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">Mobile number</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="mobile" id="mobile">
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">Email id</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="email" id="email">
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">Gender</label>
							<div class="col-sm-10">
							<input type="radio" name="gender" id="gender" value="Male">Male
							<input type="radio" name="gender" id="gender" value="Female">Female
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">Password</label>
							<div class="col-sm-10">
							<input type="Password" name="password" class="form-control" id="password">
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">Full Address</label>
							<div class="col-sm-10">
							<textarea class="form-control" name="address" id="address"></textarea>
							</div>

						</div><!--group end here-->


						<br>

						<div class="row">
							<label class="control-label col-sm-2">Pin code</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="pincode" id="pincode">
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">State:</label>
							<div class="col-sm-10">
							<select class="form-control" name="state" id="state">
								<option></option>
								<option id="state1">Karanatak</option>
								<option id="state2">Maharashtra</option>
								<option id="state3">Tamil Nadu</option>
							</select>
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<label class="control-label col-sm-2">City:</label>
							<div class="col-sm-10">
							<select class="form-control" name="city" id="city">
								<option></option>
								<option id="city1">Banglore</option>
								<option id="city2">Pune</option>
								<option id="city3">chennai</option>
							</select>
							</div>

						</div><!--group end here-->

						<br>

						<div class="row">
							<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-success" onclick="saveuser()">Register</button>
							<button class="btn btn-success">Clear</button>
						</div>

						<br>
						<br>

						</div>
			

					</form>
			</div>
			
		</div><!--10end-->

		<div class="col-sm-2"></div>
		


	</div>

	

	<script src="<?php echo BASEURL;?>assets/js/jquery.min.js"></script>


	<script>
		function saveuser()

		{
			var status = true;

			var fname =$("#fname").val().trim();


			if (fname=="")
			 {
			 	$("#fname").css({"border":"1px solid red"});
			 	status =false;
			 }

			 else 
			 {
			 	$("#fname").css({"border":""});
			 }


			}


	</script>

