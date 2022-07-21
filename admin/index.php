<?php include('header.php');?>

<div class="auth-wrapper">
	<div class="auth-content">
    <form role="form" action = "login.php" enctype = "multipart/form-data" method = "POST" class="form-signin">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/icon.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="text" name="email" required class="form-control" id="Email" placeholder="">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" name="password" required class="form-control" id="Password" placeholder="">
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
						</div>
						<button name="login" class="btn btn-block btn-primary mb-4">Signin</button>
					</div>
				</div>
			</div>
		</div>
    </form>
	</div>
</div>
<?php include('footer.php');?>