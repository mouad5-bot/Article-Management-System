
<div id="login-continer">
	<div class="login-continer">
		<div class="main d-flex">
			<div class="col-7 d-none d-sm-block">
				<img src="Assets/image/login.png" alt="login">
			</div>
			<div class="card col-12 col-sm-4 mt-5">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Log in</h1>

					<?php if (isset($_SESSION['error'])): ?>
						<div class="alert alert-danger m-5" role="alert">
							<strong>Error!</strong>
								<?php 
									echo $_SESSION['error']; 
								?>
						</div>
					<?php
					unset($_SESSION['error']);
					endif 
					?>
					<form action="../config/scripts.php" method="POST">
						<div class="">
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
		</div>
	</div>
</div>
			