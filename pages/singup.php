<div id="singup-continer">
	<div class="singup-continer">
		<div class="row main d-flex justify-content-center">
			<div class="card mt-5 col-12 col-sm-4 ">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Sign up</h1>
					<form action="../scripts/script.php" method="POST">
						<div class="">
							<div class="mb-3">
								<label for="name" class="form-label">Full name</label>
								<input type="text" class="form-control" id="full-name"  name="full_name" 
								       placeholder="veuillez entrez votre email" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Adress email</label>
								<input type="text" class="form-control"id="email"name="email"  
									   data-parsley-type="email"  data-parsley-trigger="focusout"
								       placeholder="veuillez entrez votre email" required />
							</div>
							<div class="mb-3">
								<label for="password"  class="form-label">password</label>
								<input type="password" class="form-control" id="password" name="password" 
									   placeholder="veuiller entrez votre mot de pass" required minlength="6">		
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-info text-white" type="submit" name="singup">Register</button>
								<span>Already have an account ? <a href="#" onclick="goToLogin"> Login </a></span>
							</div> 
						</div>	
					</form>
				</div>
			</div>
			<!-- <div class="d-none d-sm-block col-6" id="log-img">
				<img src="Assets/image/log.png" alt="singup">
			</div> -->
		</div>
	</div>
</div>