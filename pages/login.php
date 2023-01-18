<div id="login-continer">
	<div class="login-continer">
		<div class="row main d-flex justify-content-center"> 
			<div class="card col-12 col-sm-4 mt-5">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Log in</h1>

					<form action="scripts/login.php" method="POST">
						<div class="form-login">
							<div class="mb-3">
								<label for="email" class="form-label">Adress email</label>
								<input type="email" class="form-control" id="email"  name="email" 
										placeholder="veuillez entrez votre email" required>
							</div>
							<div class="mb-3">
								<label for="password"  class="form-label">password</label>
								<input type="password" class="form-control" id="password" name="password" 
										placeholder="veuiller entrez votre mot de pass " >
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-info text-white" onclick="goToSingup()" type="submit" name="login">log in</button>
								<span>Don't have an account ? <a href="#" id="sign"> Signup now </a></span>
							</div>
						</div>	
					</form>
				</div>	
			</div>
			<!-- <div class="col-7 d-none d-sm-block" id="imgLogin">
				<img src="Assets/image/log.png" alt="login">
			</div> -->
		</div>
	</div>
</div>
			