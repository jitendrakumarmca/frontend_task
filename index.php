<!DOCTYPE html>
<html>
<head>
	<title>Resume From</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/custome.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="row margin-bottom">
			<div class="col-sm-12 d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow"><h3 class="margin-top margin-bottom">Refume Form</h3></div>
			<div class="col-sm-12 my-3 p-3 bg-white rounded box-shadow">
				<form id="refume_frm" enctype="multipart/form-data" method="post">
					<div class="col-sm-12 clearfix">
					<div class="col-sm-6 float-left">
					<div class="form-group">
						<label for="firstname">*First Name:</label>
						<input type="text" class="form-control" id="firstname" name="fname" required>
					</div>
				     </div>
				     <div class="col-sm-6 float-left">
					<div class="form-group">
						<label for="lastname">*Last Name:</label>
						<input type="text" class="form-control" id="lastname" name="lname" required>
					</div>
				    </div>
				    </div>
				    <div class="col-sm-12 clearfix">
				    <div class="col-sm-6 float-left">
					<div class="form-group">
						<label for="emailid">*Email Address:</label>
						<input type="email" class="form-control" id="emailid" name="emailid" required>
					</div>
				   </div>
				   <div class="col-sm-6 float-left">
					<div class="form-group">
						<label for="mobileno">*Mobile Number:</label>
						<input type="number" class="form-control" id="mobileno" name="mobileno" required>
					</div>
				   </div>
				   </div>
				   <div class="col-sm-12 clearfix">
				    <div class="col-sm-6 float-left">
					<div class="form-group">
						<label for="gender_lable margin-right">Gender:</label>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="gender_g" id="gender_radio" value="Male" checked>
					  <label class="form-check-label margin-right" for="gender_radio">
					    Male
					  </label>
					  <input class="form-check-input" type="radio" name="gender_g" id="gender_radio" value="Female">
					  <label class="form-check-label margin-right" for="gender_radio">
					    Female
					  </label>
					</div>
				   </div>
				   </div>
				   <div class="col-sm-6 float-left">
				   <div class="form-group">
				    <label for="select_stste">State</label>
				    <select class="form-control" id="select_stste" name="select_stste">
				      <option value="Gujarat">Gujarat</option>
				      <option value="Maharashtra">Maharashtra</option>
				      <option value="Meghalaya">Meghalaya</option>
				      <option value="Mizoram">Mizoram</option>
				      <option value="Nagaland">Nagaland</option>
				    </select>
				  </div>
				</div>
			    </div>
			    <div class="col-sm-12 clearfix">
				    <div class="col-sm-6 float-left">
				  <div class="form-group">
				    <label for="select_city">City</label>
				    <select class="form-control" id="select_city" name="select_city">
				      <option value="Ahmedabad">Ahmedabad</option>
				      <option value="Gandhinagar">Gandhinagar</option>
				      <option value="Mumbai">Mumbai</option>
				      <option value="Shillong">Shillong</option>
				      <option value="Aizawl">Aizawl</option>
				      <option value="Kohima">Kohima</option>
				    </select>
				  </div>
				</div>
				<div class="col-sm-6 float-left">
				  <div class="form-group">
				    <label for="select_eduction">Eduction</label>
				    <select multiple class="form-control" id="select_eduction" name="select_eduction[]" required>
				      <option value="BCA">BCA</option>
				      <option value="MCA">MCA</option>
				      <option value="HSC">HSC</option>
				      <option value="MBA">MBA</option>
				      <option value="BBA">BBA</option>
				      <option value="BA">BA</option>
				      <option value="BCOM">BCOM</option>
				    </select>
				  </div>
				</div>
			</div>
				  <div class="form-group">
				  	<div class="form-check">
				  		<label for="hobbies_lable" class="margin-right">Hobbies:</label>
					<input name="hobbies_select[]" class="form-check-input" type="checkbox" id="hobbies_select" value="Chess">
					<label class="form-check-label margin-right" for="hobbies_select">
					  Chess
					</label>
					<input name="hobbies_select[]" class="form-check-input" type="checkbox" id="hobbies_select" value="Coocking">
					<label class="form-check-label margin-right" for="hobbies_select">
					  Coocking
					</label>
					<input name="hobbies_select[]" class="form-check-input" type="checkbox" id="hobbies_select" value="Dancing">
					<label class="form-check-label margin-right" for="hobbies_select">
					  Dancing
					</label>
					</div>
				  </div>
				  <div class="form-group">
					<label for="career_objective">Career Objective / Bio</label>
					<textarea name="career_objective" class="form-control" id="career_objective" rows="3"></textarea>
				  </div>
				  <!--<div class="form-group">
					<label for="profile_img">Profile Image</label>
					<input type="file" class="form-control-file" id="profile_img" name="profile_img">
				  </div> -->
				    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
					<button type="reset" class="btn btn-secondary btn-lg">Reset</button>				    
				</form>
			</div>
			<div class="col-sm-12 my-3 p-3 bg-white rounded box-shadow">
				<div id="getdata"></div>
			</div>
		</div>
	</div>
</header>
</body>
</html>