<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Password Reset Form</title>
<link href="css/admin_css/site.css" rel="stylesheet">
<style>

#pwdreset label.error {
  font-size: 0.8em;
  color: #F00;
  font-weight: bold;
  display: block;
  margin-left: 215px;
}
#pwdreset  input.error, #pwdreset select.error  {
  background: #FFA9B8;
  border: 1px solid red;
}
</style>
<script src="js/admin_js/jquery-1.7.2.min.js"></script>
<script src="js/admin_js/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
 $('#pwdreset').validate({
   
   rules: {
     email: {
        required: true,
        email: true
     },
batch: {
        required: true,
        batch:true 
     },
dob: {
        required: true,
        dob : true 
     },
branch: {
        required: true,
        branch: true 
     }, 
     roll: {
        required: true,
        rangelength:[5,16]
     },
     spam: "required"
   }, //end rules
   messages: {
      email: {
         required: "Please supply an e-mail address.",
         email: "This is not a valid email address."
       },
 batch: {
         required: "Please Enter your batch's year.",
         batch:  "Enter the Year" 
       },
 branch: {
         required: "Please Enter your branch of study.",
         branch:  "Enter your stream"
       },
      roll: {
        required: 'Please Enter your Roll Number',
      },
     
   },
   errorPlacement: function(error, element) { 
       if ( element.is(":radio") || element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
          error.insertAfter(element);
        } 
    } 

  }); // end validate 
}); // end ready
</script>

</head>
<body>
<div class="wrapper">
	<div class="header">
		<p class="logo"> IIT <i> </i> Indore <i class="mm">IITI<br>
			Alumni<br>
			Network</i></p>
	</div>
	<div class="content">
	<div class="main">
	<h1>Password Reset Form</h1>
		<form action="admin_pwd_reset_form_process.php" method="post" name="pwdreset" id="pwdreset">
      <div>
				<br>
			<div>
				<label for="email" class="label">E-mail Address</label>
				<input name="email" type="text" id="email" placeholder="someone@email.com">
			</div>
			<div style="position: relative; left: 100px;">
				
				<h5 ><a href="admin_pwd_reset_forgot_email.php">In case you have not access to your email id</a></h5>
			</div>
			<div>
				<input type="submit" name="submit" id="submit" value="Submit">
			</div>
		</form>
		</div>
	</div>
</div>
</body>
</html>
