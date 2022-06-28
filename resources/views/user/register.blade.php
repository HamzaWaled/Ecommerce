<!DOCTYPE html>
<html>
<head>
	<title>E-commerce</title>
</head>
<link rel="icon" type="image/png" href="../../../../../../dist/img/ecommerce.png" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<body >
<div class="wrapper bg-white"  >
    <div class="h2 text-center" ><span style="color: #001133;">E-</span><span style="color: #002266;">commerce</span> </div>
    <br>
    <div class="h5 font-weight-bold" style="color: #001a4d;">Registration</div>
    
    <br>
    <form action="save-user" method="POST" style="width: 400px; height: 430px;">
    	@csrf
        <input type="hidden" name="btn_sub" id="btn_sub" value="no">
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-md-6"> 
            	<label for="NameForm" class="text-muted mandatory">Name</label> 
            	<input type="textarea" class="form-control" name="NameForm" required > 
            </div>
            
            <div class="form-group col-md-6"> 
            	<label  for="EmailForm" class="text-muted mandatory">Email Address</label> 
            	<input type="email" class="form-control" name="EmailForm" required> 
            </div>
        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-md-6">
                <div> 
                	<label class="text-muted mandatory ">Gender</label> 
                </div>
                <select name="GenderForm" id="GenderForm" class="GenderForm form-control" required>
                                              <option selected disabled>M/F ..</option>
                                              <option value="1">Male</option>
                                              <option value="2">Female</option>
                                 
                                        </select>
            </div>
            <div class="form-group col-md-6"> 
            	<label for="BirthDateForm" class="text-muted mandatory ">Date of Birth</label> 
            	<input type="date" class="form-control" name="BirthDateForm" required> 
            </div>
        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-md-6"> 
            	<label for="PhoneNumberForm" class="text-muted mandatory">  Phone Number</label> 
            	<input type="tel"  class="form-control" name="PhoneNumberForm" required> 
            </div>
            <div class="form-group col-md-6"> 
            	<label for="CityForm" class="text-muted mandatory ">City</label> 
            	<input type="text" class="form-control" name="CityForm" required> 
            </div>
        </div>
        <div class="form-group col-md-12"> 
        	<label for="PasswordForm" class="text-muted mandatory ">Password</label> 
        	<input type="password" class="form-control" name="PasswordForm" required> 
        </div>
        <div class="d-flex align-items-center justify-content-sm-end button-section"> 
        	<button type="submit" name="user-save" class="btn btn-primary mx-4" >Submit</button> 
        </div>
        	 
        	 <br>
        	 <a href="/login" >Already have an account?</a>
    </form>
</div>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

	* {
	    padding: 0;
	    margin: 0;
	    box-sizing: border-box
	}

	body {
	    float: left;
	    margin-left: 50px;
	    font-family: 'Poppins', sans-serif;
	    background-image: url(https://st4.depositphotos.com/22740078/i/600/depositphotos_243195820-stock-photo-online-shopping-concept-miniature-shopping.jpg); 
	    background-size: cover;
	    background-repeat: no-repeat;
	    
	}

	.wrapper {
	    max-width: 550px;
	    border-radius: 10px;
	    margin: 50px auto;
	    padding: 20px;
	    
	}

	.h2 {
	    font-family: 'Kaushan Script', cursive;
	    font-size: 3.0rem;
	    font-weight: bold;
	    color: #7b2ee8;
	    text-shadow: 0 0 2px #a069ee;
	    font-style: italic
	}

	.h5 {
	    color: #555;
	    margin: 0
	}

	.form-control {
	    border: 1px solid #002b80;
	}

	.form-control:focus {
	    box-shadow: none
	}

	.mandatory::after {
	    content: "*";
	    color: #ff0000;
	}

	.button-section .btn {
	    background-color: #fff;
	    border-radius: 20px;
	    border: 1.5px solid #002b80;
	    padding: 5px 15px
	}

	.button-section .btn.btn-primary {
	    background-color: #002266;
	    color: #eee
	}

	.button-section .btn:hover {
	    background-color: #002b80;
	    color: #eee
	}

	.remember {
	    border: 1px solid #002b80
	}

	.gender-l {
	    margin: 0
	}

	#male {
	    display: none
	}

	input[type="radio"] {
	    visibility: hidden
	}

	input[type='radio']:checked {
	    background-color: #002b80
	}

	.btn.btn-primary {
	    background-color: #fff;
	    color: #555;
	    border: 1px solid #002b80;
	    width: 115px
	}

	.btn.btn-primary:hover {
	    background-color: #002b80;
	    color: #fff
	}

	.btn-primary:not(:disabled):not(.disabled).active,
	.btn-primary:not(:disabled):not(.disabled):active {
	    background-color: #002b80
	}

	@media(max-width: 575px) {
	    .btn-group {
	        width: 100%
	    }

	    .btn-group>.btn {
	        flex: 50%
	    }

	    .wrapper {
	        margin: 10px
	    }

	    .h5 {
	        padding-top: 10px
	    }
	}
</style>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>

 
        

