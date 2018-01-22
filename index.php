<!DOCTYPE html>
<html>
<head>
	<title>Simple Registration form</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
		
		$(document).ready(function(){

			$("#submit").click(function(){

				var jname=$("#name").val();
				var jemail=$("#email").val();
				var jcity=$("#city").val();
				var jgender=$("#gender").val();

				// $.post("adduser.php",{name:jname,email:jemail,city:jcity},function(data){

				// 	$("#result").html(data);

				// });


				$.ajax({
					url :'adduser.php',
					data: {name:jname,email:jemail,city:jcity,gender:jgender},
					type:'POST',
					success :function(data){
						$("#result").html(data);
						console.log(data);
					}

				});

				clearInput();
			});

		});


function clearInput() {
	$("#myform :input").each( function() {
	   $(this).val('');
	});
}

</script>

</head>
<body>

<div class="container-fluid">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
	<br>
	<div class="panel" style="background-color: orange">
		<div class="panel-heading">
			<h2>Register Here</h2>
		</div>
		<div class="panel-body">
				<form id="myform" name="myform" >
					

					<div class="form-group">
						<label >Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<label >Email</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label >City</label>
						<input type="text" name="city" id="city" class="form-control">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<div class="radio">
						<label><input type="radio" name="gender" id="gender" value="Male" >Male</label>
						<label><input type="radio" name="gender" id="gender" value="female" name="">Female</label>
						</div>
					</div>
					<div class="form-group">
						<button type="button" id="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>

				<div id="result">Hello World</div>



		</div>

	</div>



	</div>

<div class="col-xs-4"></div>
</div>



</body>
</html>